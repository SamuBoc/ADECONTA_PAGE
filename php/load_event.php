<?php
require_once "main.php";

try {
    $conexion = conexion();
    $eventId = $_POST['id'];

    // Consulta para obtener los detalles del evento
    $query = "SELECT * FROM events WHERE id = :id"; // Asegúrate de que la tabla y columnas coincidan
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $eventId);
    $stmt->execute();
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    // Consulta para obtener los IDs de los ponentes asociados al evento
    $querySpeakers = "SELECT speaker_id FROM speaker_event WHERE event_id = :event_id";
    $stmtSpeakers = $conexion->prepare($querySpeakers);
    $stmtSpeakers->bindParam(':event_id', $eventId);
    $stmtSpeakers->execute();
    $speakers = $stmtSpeakers->fetchAll(PDO::FETCH_COLUMN);

    // Preparar la respuesta
    if ($event) {
        $event['speaker_options'] = $speakers; // Agregar los IDs de los ponentes al evento
        echo json_encode($event);
    } else {
        echo json_encode(false);
    }
} catch (Exception $e) {
    echo json_encode(false);
}
?>
