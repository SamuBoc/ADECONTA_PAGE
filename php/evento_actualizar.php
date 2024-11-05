<?php
    require_once "main.php";

    /*== Almacenando datos ==*/
    $id = limpiar_cadena($_POST['event_id']);
    $name = limpiar_cadena($_POST['name']);
    $date_initial = limpiar_cadena($_POST['date_initial']);
    $start_time = limpiar_cadena($_POST['start_time']);
    $end_time = limpiar_cadena($_POST['end_time']);
    $type = limpiar_cadena($_POST['type']);
    $photo = limpiar_cadena($_POST['photo']);
    $link = limpiar_cadena($_POST['link']);
    $user_id = limpiar_cadena($_POST['user_id']);
    $location_id = limpiar_cadena($_POST['location_id']);
    $platform_id = limpiar_cadena($_POST['platform_id']);
    $cost_initial = limpiar_cadena($_POST['cost_initial']);
    $cost_sub = limpiar_cadena($_POST['cost_sub']);

    /*== Verificando campos obligatorios ==*/
    if($name == "" || $date_initial == "" || $start_time == "" || $end_time == "" || $user_id == ""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No has llenado todos los campos obligatorios.
            </div>
        ';
        exit();
    }

    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}", $name)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado.
            </div>
        ';
        exit();
    }

    /*== Actualizando datos ==*/
    $actualizar_evento = conexion();
    $actualizar_evento = $actualizar_evento->prepare("UPDATE events SET name=:name, date_initial=:date_initial, start_time=:start_time, end_time=:end_time, type=:type, photo=:photo, link=:link, location_id=:location_id, platform_id=:platform_id, cost_initial=:cost_initial, cost_sub=:cost_sub WHERE id=:id");

    $marcadores = [
        ":name" => $name,
        ":date_initial" => $date_initial,
        ":start_time" => $start_time,
        ":end_time" => $end_time,
        ":type" => $type,
        ":photo" => $photo,
        ":link" => $link,
        ":location_id" => $location_id,
        ":platform_id" => $platform_id,
        ":cost_initial" => $cost_initial,
        ":cost_sub" => $cost_sub,
    ];

    $actualizar_evento->execute($marcadores);

    if($actualizar_evento->rowCount() == 1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡Evento Actualizado!</strong><br>
                El evento se actualizó con éxito.
            </div>
        ';
    } else {
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo actualizar el evento, por favor intente nuevamente.
            </div>
        ';
    }
    $actualizar_evento = null;
?>
