<?php
require_once "main.php";

try {
    $conexion = conexion();
    $query = "SELECT * FROM speakers"; // Ajusta el nombre de la tabla si es necesario
    $result = $conexion->query($query);
    $speakers = $result->fetchAll();

    // Generar las opciones de select
    foreach($speakers as $row) {
        echo "<option value='{$row['id']}'>{$row['name']}</option>";
    }

} catch (Exception $e) {
    echo "<option value=''>Error al cargar ponentes</option>";
}
