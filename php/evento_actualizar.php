<?php
require_once "main.php";
require_once "../inc/session_start.php";

if (isset($_SESSION['id'])) {
    $marcs["user_id"] = $_SESSION['id'];
} else {
    echo "Error: El usuario no está autenticado.";
    exit;
}

function validar_dato($campo, $valor, $patron, $mensaje_error)
{
    if (empty($valor) || !preg_match($patron, $valor)) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                {$mensaje_error}
            </div>";
        exit();
    }
}

// Actualizamos la validación del campo 'name' para permitir cualquier carácter con límite de tamaño
$datos_a_validar = [
    ["campo" => "name", "valor" => $_POST['name'], "patron" => "/^.{3,40}$/", "mensaje" => "El NOMBRE debe tener entre 3 y 40 caracteres"],
    ["campo" => "type", "valor" => $_POST['type'], "patron" => "/^.{3,40}$/", "mensaje" => "El TIPO solo puede contener letras y debe tener entre 3 y 100 caracteres"]
];

foreach ($datos_a_validar as $dato) {
    validar_dato($dato['campo'], $dato['valor'], $dato['patron'], $dato['mensaje']);
}

if (!is_numeric($_POST['cost_sub'])) {
    echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                El costo afiliado no tiene el formato valido
            </div>";
    exit();
}

if (!is_numeric($_POST['cost_initial'])) {
    echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                El costo inicial no tiene el formato valido
            </div>";
    exit();
}

// Validaciones adicionales
if (!isset($_POST['speaker_option'])) {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No se seleccionó ponente
        </div>";
    exit();
}

if (!isset($_POST['timestamp'])) {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            La fecha de inicio no está definida
        </div>";
    exit();
}

if (!isset($_POST['start_time'])) {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            El tiempo de inicio del evento no está definido
        </div>";
    exit();
}

$view = isset($_POST['view']) ? $_POST['view'] : '0';

if (!in_array($view, ['0', '1'])) {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            El campo Destacado no tiene un valor válido.
        </div>";
    exit();
}

// Preparar los datos
$marcs = [
    "id" => $_POST['event_id_up'],
    "name" => $_POST['name'] ?? null,
    "date_initial" => $_POST['timestamp'] ?? null,
    "description" => $_POST['description'] ?? null,
    "start_time" => $_POST['start_time'] ?? null,
    "end_time" => null,
    "type" => $_POST['type'] ?? null,
    "photo" => null,
    "link" => null,
    "user_id" => $_SESSION['id'],
    "location_id" => null,
    "platform_id" => null,
    "cost_initial" => $_POST['cost_initial'] ?? null,
    "cost_sub" => $_POST['cost_sub'] ?? null,
    "view" => $_POST['view'],
];

// Validar y actualizar los datos
foreach ($marcs as $key => $data) {
    if ($data === "") {
        $marcs[$key] = null;
    } elseif (isset($_POST[$key])) {
        $marcs[$key] = $_POST[$key];
    }
}

// Asignar location_id o platform_id según modalidad
$modality = $_POST['modality'] ?? '';
if ($modality === 'presencial') {
    $marcs['location_id'] = $_POST['selected_option'] ?? null; // ID de la dirección si es presencial
} elseif ($modality === 'virtual') {
    $marcs['platform_id'] = $_POST['selected_option'] ?? null; // ID de la plataforma si es virtual
}

// Manejo de la imagen del evento
$img_dir = '../img/events/';
if ($_FILES['poster_file']['name'] != "" && $_FILES['poster_file']['size'] > 0) {
    if (!file_exists($img_dir) && !mkdir($img_dir, 0777)) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                Error al crear el directorio de imágenes
            </div>";
        exit();
    }

    $allowed_types = ['image/jpeg', 'image/png', 'image/webp'];
    if (!in_array(mime_content_type($_FILES['poster_file']['tmp_name']), $allowed_types)) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                La imagen seleccionada no está permitida
            </div>";
        exit();
    }

    if (($_FILES['poster_file']['size'] / 1024) > 3072) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                La imagen seleccionada supera el límite de peso permitido
            </div>";
        exit();
    }

    $img_ext = pathinfo($_FILES['poster_file']['name'], PATHINFO_EXTENSION);
    $img_nombre = preg_replace('/[^a-zA-Z0-9]/', '_', $marcs['name']);
    $foto = $img_nombre . '.' . $img_ext;

    if (!move_uploaded_file($_FILES['poster_file']['tmp_name'], $img_dir . $foto)) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo subir la imagen
            </div>";
        exit();
    }

    $marcs['photo'] = $foto;
}

// Conectar a la base de datos
$conexion = conexion();

// Actualizar el evento existente
$stms = $conexion->prepare(
    'UPDATE events 
     SET name = :name, 
         description = :description, 
         date_initial = :date_initial, 
         start_time = :start_time, 
         end_time = :end_time, 
         type = :type, 
         photo = :photo, 
         link = :link, 
         user_id = :user_id, 
         location_id = :location_id, 
         platform_id = :platform_id, 
         cost_initial = :cost_initial, 
         cost_sub = :cost_sub, 
         view = :view
     WHERE id = :id'
);

$stms->execute($marcs);

if ($stms->rowCount() > 0) {
    echo "
        <div class='notification is-info is-light'>
            <strong>¡EVENTO ACTUALIZADO!</strong><br>
            El evento se actualizó con éxito
        </div>";

    // Actualizar en la tabla intermedia speaker_event
    $conexion->prepare("DELETE FROM speaker_event WHERE event_id = :event_id")
        ->execute([':event_id' => $_POST['event_id_up']]);

    $insert_speaker = $conexion->prepare("INSERT INTO speaker_event (event_id, speaker_id) VALUES (:event_id, :speaker_id)");

    foreach ($_POST['speaker_option'] as $speaker_id) {
        $insert_speaker->execute([
            ':event_id' => $_POST['event_id_up'],
            ':speaker_id' => $speaker_id
        ]);
    }
} else {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No se pudo actualizar el evento
        </div>";
}
?>
