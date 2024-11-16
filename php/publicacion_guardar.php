<?php
require_once "main.php";

/*== Almacenando datos ==*/
$titulo = limpiar_cadena($_POST['tittle']);
$descripcion = limpiar_cadena($_POST['description']);
$articulo = limpiar_cadena($_POST['article']);

// Asegúrate de obtener el ID del speaker, en este caso es un campo que deberías recibir en el formulario
$speaker_id = limpiar_cadena($_POST['speaker_option']);

/*== Verificando campos obligatorios ==*/
if($titulo == "" || $descripcion == "" || $articulo == "" || $speaker_id == ""){
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>
    ';
    exit();
}

/*== Verificando integridad de los datos ==*/
if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9.]{4,40}",$titulo)){
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            El TÍTULO no coincide con el formato solicitado
        </div>
    ';
    exit();
}

if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9.,]{4,140}",$descripcion)){
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            La DESCRIPCIÓN no coincide con el formato solicitado
        </div>
    ';
    exit();
}

$marcadores = [
    ":titulo" => $titulo,
    ":descripcion" => $descripcion,
    ":articulo" => $articulo,
    ":speaker_id" => $speaker_id, // Aquí se inserta el id del speaker
    ":photo" => "",  // Inicializamos el campo de la foto vacío
    ":dateP" => date('Y-m-d'),  // Se agrega la fecha actual en formato YYYY-MM-DD
];
// Manejo de la imagen del evento
$img_dir = '../img/publications/';
if ($_FILES['poster_file']['name'] != "" && $_FILES['poster_file']['size'] > 0) {
    // Verifica si el directorio de imágenes existe, si no, lo crea
    if (!file_exists($img_dir) && !mkdir($img_dir, 0777, true)) {
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

    // Verifica el tamaño de la imagen
    if (($_FILES['poster_file']['size'] / 1024) > 3072) { // 3MB en KB
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                La imagen seleccionada supera el límite de peso permitido
            </div>";
        exit();
    }

    // Obtiene el nombre original de la imagen
    $img_nombre_original = $_FILES['poster_file']['name'];

    // Extrae la extensión de la imagen
    $img_ext = pathinfo($img_nombre_original, PATHINFO_EXTENSION);

    // Asegúrate de que el nombre del archivo sea único para evitar sobrescribir
    $img_nombre = preg_replace('/[^a-zA-Z0-9]/', '_', pathinfo($img_nombre_original, PATHINFO_FILENAME)) . '.' . $img_ext; // Solo usamos el nombre original con la extensión

    // Construye la ruta completa para mover la imagen
    $foto = $img_dir . $img_nombre;

    // Mueve la imagen al directorio de destino
    if (!move_uploaded_file($_FILES['poster_file']['tmp_name'], $foto)) {
        echo "
            <div class='notification is-danger is-light'>
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo subir la imagen
            </div>";
        exit();
    }

    // Asigna el nombre de la imagen a la variable de marcadores
    $marcadores['photo'] = $img_nombre;
}




/*== Guardando datos en la tabla de publicaciones ==*/
$guardar_publicacion = conexion();
$guardar_publicacion = $guardar_publicacion->prepare("INSERT INTO publications(tittle, description, text, speaker_id, img, dateP) VALUES(:titulo, :descripcion, :articulo, :speaker_id, :photo, :dateP)");

$guardar_publicacion->execute($marcadores);

if($guardar_publicacion->rowCount() == 1){
    echo '
        <div class="notification is-info is-light">
            <strong>PUBLICACIÓN REGISTRADA!</strong><br>
            La publicación se registró con éxito.
        </div>
    ';
} else {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inesperado!</strong><br>
            No se pudo registrar la publicación, por favor intente nuevamente.
        </div>
    ';
}

$guardar_publicacion = null;
?>