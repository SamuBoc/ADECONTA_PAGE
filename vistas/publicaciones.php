<style>
    * {
        font-family: "Montserrat", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* ----- Carrusel/Banner Principal ----- */
    .carousel-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 80vh;
    }

    .carousel-slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: opacity 0.5s ease;
        opacity: 0;
    }

    .carousel-slide.active {
        opacity: 1;
    }

    .carousel-content {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        color: #FFFFFF;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
    }

    .carousel-content h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1.2rem;
        margin-left: 4rem;
    }

    .carousel-content p {
        font-size: 1.1rem;
        margin-bottom: 1.2em;
        margin-left: 4rem;
    }

    .carousel-content .author {
        font-style: italic;
        font-size: 1rem;
    }

    /* Flechas del carrusel */
    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
        color: #FFFFFF;
        background: rgba(0, 0, 0, 0.5);
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
    }

    .carousel-control.left {
        left: 10px;
    }

    .carousel-control.right {
        right: 10px;
    }

    /* ----- Barra de Búsqueda ----- */
    .search-form {
        display: flex;
        justify-content: center;
        margin: 20px auto;
        width: 100%;
    }

    .search-input {
        width: 70%;
        padding: 10px;
        font-size: 1rem;
        border-radius: 5px;
        border: 1px solid #4CAF50;
    }

    /* ----- Botón de Enlace ----- */
    .btn {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
        font-size: 1rem;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn:active {
        transform: translateY(1px);
    }

    /* ----- Grid de Tarjetas de Noticias ----- */
    .news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Hasta 3 tarjetas por fila */
    gap: 1.5rem;
    padding: 20px;
    margin-top: 20px;
    max-width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-card:hover {
    transform: translateY(-10px); /* Mueve la tarjeta hacia arriba */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Aumenta la sombra */
}
.news-card {
    background-color: #FFFFFF;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
    height: 420px; /* Aumenta la altura de la tarjeta */
    display: flex;
    flex-direction: column;
}

.news-card img {
    width: 100%;
    height: 150px; /* Ajusta la altura de la imagen */
    object-fit: cover;
}

.news-card-content {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.news-card h2 {
    font-size: 1.4rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.news-card p {
    color: #555;
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.news-card .author {
    font-style: italic;
    font-size: 0.9rem;
}

</style>
<?php

include("./php/main.php");

// Consulta para obtener las 4 publicaciones más recientes
$sql_carousel = "SELECT p.tittle, p.description, p.img, p.dateP AS dateP, s.name AS author_name
                 FROM publications p
                 LEFT JOIN speakers s ON p.speaker_id = s.id
                 ORDER BY p.dateP DESC
                 LIMIT 4";

$carousel_result = conexion()->query($sql_carousel);

?>

<!-- HTML de la Página -->

<!-- Carrusel/Banner Principal -->
<div class="carousel-container">
    <?php
    // Verifica si hay resultados en la consulta del carrusel
    if ($carousel_result->rowCount() > 0) {
        // Mostrar cada publicación como una slide del carrusel
        $isFirstSlide = true;
        while ($carousel_row = $carousel_result->fetch()) {
            $img_src = './img/publications/' . htmlspecialchars($carousel_row['img']);
            $active_class = $isFirstSlide ? 'active' : '';
            $isFirstSlide = false; // Solo la primera slide tiene la clase 'active'
            ?>
            <div class="carousel-slide <?php echo $active_class; ?>" style="background-image: url('<?php echo $img_src; ?>');">
                <div class="carousel-content">
                    <h1><?php echo htmlspecialchars($carousel_row['tittle']); ?></h1>
                    <p><?php echo htmlspecialchars($carousel_row['description']); ?></p>
                    <p class="author">Autor: <?php echo htmlspecialchars($carousel_row['author_name']); ?></p>
                    <p class="date">Fecha: <?php echo htmlspecialchars($carousel_row['dateP']); ?></p>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>No se encontraron publicaciones para el carrusel.</p>";
    }
    ?>
    <!-- Controles del Carrusel -->
    <span class="carousel-control left" onclick="moveCarousel(-1)">&#10094;</span>
    <span class="carousel-control right" onclick="moveCarousel(1)">&#10095;</span>
</div>

<!-- Barra de Búsqueda -->
<div class="search-form">
    <input type="text" class="search-input" placeholder="Buscar publicaciones...">
</div>

<div class="news-grid">

<?php

// Consulta para todas las publicaciones restantes en la cuadrícula de noticias
$sql_grid = "SELECT p.id, p.tittle, p.description, p.img, p.dateP AS dateP, s.name AS author_name
             FROM publications p
             LEFT JOIN speakers s ON p.speaker_id = s.id";

$conexion = conexion()->query($sql_grid);

// Verifica si hay resultados para la cuadrícula de noticias
if ($conexion->rowCount() > 0) {
    // Mostrar publicaciones
    while($row = $conexion->fetch()) {
        ?>
        <div class="news-card">
            <img src="./img/publications/<?php echo htmlspecialchars($row['img']); ?>" alt="Imagen de la Publicación">
            <div class="news-card-content">
                <h2><?php echo htmlspecialchars($row['tittle']); ?></h2>
                <p><?php echo htmlspecialchars($row['description']); ?></p>
                <p class="author">Autor: <?php echo htmlspecialchars($row['author_name']); ?></p>
                <p class="date">Fecha: <?php echo htmlspecialchars($row['dateP']); ?></p>
                <a href='index.php?vista=publication_details&publication=<?php echo htmlspecialchars($row['id']); ?>' class='btn'>Más información</a>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No se encontraron publicaciones.</p>";
}
?>
</div>
<!-- Script de JavaScript para el Carrusel -->
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll(".carousel-slide");

    function moveCarousel(direction) {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide + direction + slides.length) % slides.length;
        slides[currentSlide].classList.add("active");
    }
</script>
