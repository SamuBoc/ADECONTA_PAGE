<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<style>
/* Banner de la publicación */
.publication-banner {
    position: relative;
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 40px;
    text-align: left; /* Cambiado a la izquierda */
}

.publication-banner-content {
    max-width: 600px;
    padding: 20px;
    background: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para el sombreado */
}

.publication-banner-content h1 {
    font-size: 2.5em;
    margin: 0;
    color: #fff;
}

.publication-date,
.author {
    font-size: 1.2em;
    margin-top: 5px;
    color: #f0f0f0;
}

/* Contenido de la publicación */
.publication-content {
    margin: 30px auto;
    padding: 20px;
    max-width: 800px;
    width: 90%;
    line-height: 1.8;
    font-size: 1.1em;
    color: #333;
    overflow-wrap: break-word;
}

.publication-content p {
    margin-bottom: 1em;
}


</style>

<?php

include("./php/main.php");

// Obtener el ID de la publicación desde la URL
$publication_id = isset($_GET['publication']) ? intval($_GET['publication']) : 0;

// Consulta a la base de datos para obtener los detalles de la publicación
$sql_publication = "SELECT p.tittle, p.description, p.text, p.img, p.dateP AS dateP, s.name AS author_name
                    FROM publications p
                    LEFT JOIN speakers s ON p.speaker_id = s.id
                    WHERE p.id = :publication_id
                    LIMIT 1";

$statement = conexion()->prepare($sql_publication);
$statement->bindParam(':publication_id', $publication_id, PDO::PARAM_INT);
$statement->execute();

// Verificar si se obtuvo algún resultado
if ($statement->rowCount() > 0) {
    $publication = $statement->fetch();
} else {
    echo "<p>No se encontró la publicación solicitada.</p>";
    exit();
}

?>

<!-- HTML de la Página de Detalles de Publicación -->

<div class="publication-banner" style="background-image: url('./img/publications/<?php echo htmlspecialchars($publication['img']); ?>');">
    <div class="publication-banner-content">
        <h1><?php echo htmlspecialchars($publication['tittle']); ?></h1>
        <p class="publication-date"><?php echo htmlspecialchars($publication['dateP']); ?></p>
        <p class="author">Autor: <?php echo htmlspecialchars($publication['author_name']); ?></p>
    </div>
</div>

<div class="publication-content">
    <?php
    // Decodificar las entidades HTML para que las etiquetas HTML se interpreten correctamente
    echo html_entity_decode($publication['text']);
    ?>
</div>


