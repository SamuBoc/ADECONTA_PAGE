<?php
/*== Almacenando datos ==*/
$event_id_del = limpiar_cadena($_GET['event_id_del']);

/*== Verificando si el evento existe ==*/
$check_event = conexion();
$check_event = $check_event->prepare("SELECT id FROM events WHERE id = :id");
$check_event->execute([':id' => $event_id_del]);

if ($check_event->rowCount() == 1) {
    try {
        // Comenzar la transacción
        $conexion = conexion();
        $conexion->beginTransaction();

        // Eliminar los registros de speaker_event relacionados
        $eliminar_speakers = $conexion->prepare("DELETE FROM speaker_event WHERE event_id = :event_id");
        $eliminar_speakers->execute([':event_id' => $event_id_del]);

        // Ahora eliminar el evento
        $eliminar_evento = $conexion->prepare("DELETE FROM events WHERE id = :id");
        $eliminar_evento->execute([':id' => $event_id_del]);

        // Confirmar la transacción
        $conexion->commit();

        if ($eliminar_evento->rowCount() == 1) {
            echo '
                <div class="notification is-info is-light">
                    <strong>¡EVENTO ELIMINADA!</strong><br>
                    Los datos del evento se eliminaron con éxito
                </div>
            ';
        } else {
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrió un error inesperado!</strong><br>
                    No se pudo eliminar el evento, por favor intente nuevamente
                </div>
            ';
        }
    } catch (Exception $e) {
        // Si hay un error, revertir la transacción
        $conexion->rollBack();
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo eliminar el evento y/o sus ponentes, por favor intente nuevamente
            </div>
        ';
    }
    $check_event = null;
} else {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            El EVENTO que intenta eliminar no existe
        </div>
    ';
}
?>
