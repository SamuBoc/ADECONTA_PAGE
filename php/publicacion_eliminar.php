<?php
/*== Almacenando datos ==*/
$publication_id_del = limpiar_cadena($_GET['publication_id_del']);

/*== Verificando si la publicación existe ==*/
$check_publication = conexion();
$check_publication = $check_publication->prepare("SELECT id FROM publications WHERE id = :id");
$check_publication->execute([':id' => $publication_id_del]);

if ($check_publication->rowCount() == 1) {
    try {
        // Comenzar la transacción
        $conexion = conexion();

        // Eliminar los registros relacionados con esta publicación, si aplica

        // Ahora eliminar la publicación
        $eliminar_publicacion = $conexion->prepare("DELETE FROM publications WHERE id = :id");
        $eliminar_publicacion->execute([':id' => $publication_id_del]);

        if ($eliminar_publicacion->rowCount() <= 1) {
            echo '
                <div class="notification is-info is-light">
                    <strong>¡PUBLICACIÓN ELIMINADA!</strong><br>
                    Los datos de la publicación se eliminaron con éxito
                </div>
            ';
        } else {
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrió un error inesperado!</strong><br>
                    No se pudo eliminar la publicación, por favor intente nuevamente
                </div>
            ';
        }
    } catch (Exception $e) {
        // Si hay un error, revertir la transacción
        $conexion->rollBack();
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo eliminar la publicación y/o los datos relacionados, por favor intente nuevamente
            </div>
        ';
    }
    $check_publication = null;
} else {
    echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrió un error inesperado!</strong><br>
            La PUBLICACIÓN que intenta eliminar no existe
        </div>
    ';
}
?>
