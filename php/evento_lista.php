<?php
$inicio = ($pagina > 0) ? (($pagina * $registros) - $registros) : 0;
$tabla = "";

// Verifica si hay una búsqueda
if (isset($busqueda) && $busqueda != "") {
    $consulta_datos = "
    SELECT e.*, 
           COALESCE(p.name, '') AS platform_name,
           COALESCE(u.address, '') AS ubication_address,
           GROUP_CONCAT(s.name SEPARATOR ', ') AS speaker_names
    FROM events e
    LEFT JOIN platforms p ON e.platform_id = p.id
    LEFT JOIN ubication u ON e.location_id = u.id  
    LEFT JOIN speaker_event se ON e.id = se.event_id
    LEFT JOIN speakers s ON se.speaker_id = s.id
    WHERE (e.name LIKE :busqueda OR e.type LIKE :busqueda)
    GROUP BY e.id
    ORDER BY e.name ASC 
    LIMIT :inicio, :registros
";

    $consulta_total = "SELECT COUNT(id) FROM events WHERE name LIKE :busqueda OR type LIKE :busqueda";
} else {
    $consulta_datos = "
    SELECT e.*, 
           COALESCE(p.name, '') AS platform_name,
           COALESCE(u.address, '') AS ubication_address,
           GROUP_CONCAT(s.name SEPARATOR ', ') AS speaker_names
    FROM events e
    LEFT JOIN platforms p ON e.platform_id = p.id
    LEFT JOIN ubication u ON e.location_id = u.id  
    LEFT JOIN speaker_event se ON e.id = se.event_id
    LEFT JOIN speakers s ON se.speaker_id = s.id
    GROUP BY e.id
    ORDER BY e.name ASC 
    LIMIT :inicio, :registros
";

    $consulta_total = "SELECT COUNT(id) FROM events";
}

// Conexión a la base de datos
$conexion = conexion();

try {
    // Preparar y ejecutar la consulta de datos
    $stmt_datos = $conexion->prepare($consulta_datos);
    if (isset($busqueda) && $busqueda != "") {
        $stmt_datos->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);
    }
    $stmt_datos->bindValue(':inicio', $inicio, PDO::PARAM_INT);
    $stmt_datos->bindValue(':registros', $registros, PDO::PARAM_INT);
    $stmt_datos->execute();
    $datos = $stmt_datos->fetchAll();

    // Preparar y ejecutar la consulta total
    $stmt_total = $conexion->prepare($consulta_total);
    if (isset($busqueda) && $busqueda != "") {
        $stmt_total->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);
    }
    $stmt_total->execute();
    $total = (int) $stmt_total->fetchColumn();

    $Npaginas = ceil($total / $registros);

    // Construcción de la tabla
    $tabla .= '
    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Hora I.</th>
                    <th>Hora F.</th>
                    <th>Costo I.</th>
                    <th>Costo F.</th>
                    <th>Dirección/Plataforma</th>
                    <th>Ponentes</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
    ';

    if ($total >= 1 && $pagina <= $Npaginas) {
        $contador = $inicio + 1;
        foreach ($datos as $rows) {
            $speaker_names = htmlspecialchars($rows['speaker_names'] ?? 'No hay ponentes');  // Manejar si no hay ponentes
            
            $tabla .= '
                <tr class="has-text-centered">
                    <td>' . $contador . '</td>
                    <td>' . htmlspecialchars($rows['name']) . '</td>
                    <td>' . htmlspecialchars($rows['type']) . '</td>
                    <td>' . htmlspecialchars($rows['date_initial']) . '</td>
                    <td>' . htmlspecialchars($rows['start_time']) . '</td>
                    <td>' . htmlspecialchars($rows['end_time']) . '</td>
                    <td>$' . number_format($rows['cost_initial'], 2) . '</td>
                    <td>$' . number_format($rows['cost_sub'], 2) . '</td>
                    <td>' . htmlspecialchars($rows['ubication_address'] ?: $rows['platform_name']) . '</td>
                    <td>' . $speaker_names . '</td>
                    <td>
                        <a href="index.php?vista=event_update&event_id_up=' . $rows['id'] . '" class="button is-success is-rounded is-small">Actualizar</a>
                        <a href="' . $url . $pagina . '&event_id_del=' . $rows['id'] . '" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
            $contador++;
        }
    } else {
        $tabla .= '
            <tr class="has-text-centered">
                <td colspan="11">No hay registros en el sistema</td>
            </tr>
        ';
    }

    $tabla .= '</tbody></table></div>';

    if ($total > 0 && $pagina <= $Npaginas) {
        $tabla .= '<p class="has-text-right">Mostrando eventos del <strong>' . $inicio + 1 . '</strong> al <strong>' . ($contador - 1) . '</strong> de un total de <strong>' . $total . '</strong></p>';
        echo paginador_tablas($pagina, $Npaginas, $url, 7);
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conexion = null;
echo $tabla;
?>
