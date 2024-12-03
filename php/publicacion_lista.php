<?php
$inicio = ($pagina > 0) ? (($pagina * $registros) - $registros) : 0;
$tabla = "";

// Verifica si hay una búsqueda
if (isset($busqueda) && $busqueda != "") {
    $consulta_datos = "
    SELECT p.*, 
           COALESCE(u.name, '') AS user_name
    FROM publications p
    LEFT JOIN speakers u ON p.speaker_id = u.id
    WHERE (p.tittle LIKE :busqueda OR p.text LIKE :busqueda)
    ORDER BY p.tittle ASC 
    LIMIT :inicio, :registros
    ";

    $consulta_total = "SELECT COUNT(id) FROM publications WHERE tittle LIKE :busqueda OR text LIKE :busqueda";
} else {
    $consulta_datos = "
    SELECT p.*, 
           COALESCE(u.name, '') AS user_name
    FROM publications p
    LEFT JOIN speakers u ON p.speaker_id = u.id
    ORDER BY p.tittle ASC 
    LIMIT :inicio, :registros
    ";

    $consulta_total = "SELECT COUNT(id) FROM publications";
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
    $datos = $stmt_datos->fetchAll(PDO::FETCH_ASSOC);

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
                    <th>Título</th>
                    <th>Escritor</th>
                    <th>Fecha de Publicación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
    ';

    if ($total >= 1 && $pagina <= $Npaginas) {
        $contador = $inicio + 1;
        foreach ($datos as $rows) {
            $tabla .= '
                <tr class="has-text-centered">
                    <td>' . $contador . '</td>
                    <td>' . htmlspecialchars($rows['tittle']) . '</td>
                    <td>' . htmlspecialchars($rows['user_name']) . '</td>
                    <td>' . htmlspecialchars($rows['dateP']) . '</td>
                    <td>
                        <a href="index.php?vista=publication_update&publication_id_up=' . $rows['id'] . '" class="button is-success is-rounded is-small">Actualizar</a>
                        <a href="' . $url . $pagina . '&publication_id_del=' . $rows['id'] . '" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
            $contador++;
        }
    } else {
        $tabla .= '
            <tr class="has-text-centered">
                <td colspan="6">No hay registros en el sistema</td>
            </tr>
        ';
    }

    $tabla .= '</tbody></table></div>';

    if ($total > 0 && $pagina <= $Npaginas) {
        $tabla .= '<p class="has-text-right">Mostrando publicaciones del <strong>' . ($inicio + 1) . '</strong> al <strong>' . ($contador - 1) . '</strong> de un total de <strong>' . $total . '</strong></p>';
        echo paginador_tablas($pagina, $Npaginas, $url, 7);
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conexion = null;
echo $tabla;
?>
