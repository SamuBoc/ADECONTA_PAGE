<?php
require_once "main.php";

$options = "";

if (isset($_POST['modality'])) {
    $modality = $_POST['modality'];
    $conexion = conexion();

    if ($modality == 'presencial') {
        $query = "SELECT * FROM ubication";
    } else if ($modality == 'virtual') {
        $query = "SELECT * FROM platforms";
    }

    $result = $conexion->query($query);
    $result = $result->fetchAll();

    foreach ($result as $row) {
        $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    echo $options;
}

// Carga de ponentes
if (isset($_POST['load_speakers'])) {
    $conexion = conexion();
    $query = "SELECT * FROM speakers"; // Asegúrate de que esta tabla exista y contenga los ponentes
    $result = $conexion->query($query);
    $result = $result->fetchAll();

    foreach ($result as $row) {
        $options .= "<option value='speaker_{$row['id']}'>{$row['name']}</option>";
    }
    echo $options;
}

?>
