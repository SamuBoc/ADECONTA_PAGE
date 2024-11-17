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

// Preparar los datos
$marcs = [
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

// Obtener el ID del último evento y sumarle 1
$last_event_id_query = $conexion->query("SELECT MAX(id) AS max_id FROM events");
$max_event_id = $last_event_id_query->fetch()['max_id'];
$new_event_id = $max_event_id + 1;

// Insertar el nuevo evento
$stms = $conexion->prepare(
    'INSERT INTO events(id, name, description, date_initial, start_time, end_time, type, photo, link, user_id, location_id, platform_id, cost_initial, cost_sub) 
    VALUES(:id, :name, :description, :date_initial, :start_time, :end_time, :type, :photo, :link, :user_id, :location_id, :platform_id, :cost_initial, :cost_sub)'
);
$marcs['id'] = $new_event_id; // Asignar el nuevo ID al evento

$stms->execute($marcs);

if ($stms->rowCount() == 1) {
    echo "
        <div class='notification is-info is-light'>
            <strong>¡EVENTO REGISTRADO!</strong><br>
            El evento se registró con éxito
        </div>";

    // Insertar en la tabla intermedia speaker_event
    $insert_speaker = $conexion->prepare("INSERT INTO speaker_event (event_id, speaker_id) VALUES (:event_id, :speaker_id)");

    foreach ($_POST['speaker_option'] as $speaker_id) {
        $insert_speaker->execute([
            ':event_id' => $new_event_id,
            ':speaker_id' => $speaker_id
        ]);
    }

} else {
    echo "
        <div class='notification is-danger is-light'>
            <strong>¡Ocurrió un error inesperado!</strong><br>
            No se pudo registrar el evento
        </div>";
}
?>