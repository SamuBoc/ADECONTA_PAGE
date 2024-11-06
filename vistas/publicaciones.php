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
        width: 50%; /* Ajusta el ancho de la sombra y el texto */
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        color: #FFFFFF;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)); /* Sombra izquierda */
    }

    .carousel-content h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1.2rem;
        margin-left: 4rem
    }

    .carousel-content p {
        font-size: 1.1rem;
        margin-bottom: 1.2em;
        margin-left: 4rem
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

    /* ----- Grid de Tarjetas de Noticias ----- */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        padding: 20px;
        margin-top: 20px;
    }

    .news-card {
        background-color: #FFFFFF;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .news-card:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .news-card.large {
        grid-column: span 2;
        grid-row: span 2;
    }

    .news-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .news-card-content {
        padding: 1rem;
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

<!-- HTML de la Página -->

<!-- Carrusel/Banner Principal -->
<div class="carousel-container">
    <div class="carousel-slide active" style="background-image: url('./img/banner_main.svg');">
        <div class="carousel-content">
            <h1>Título de Noticia 1</h1>
            <p>Descripción breve de la noticia destacada.</p>
            <p class="author">Autor: Juan Pérez</p>
        </div>
    </div>
    <div class="carousel-slide" style="background-image: url('./img/pexels-pixabay-416320.webp');">
        <div class="carousel-content">
            <h1>Título de Noticia 2</h1>
            <p>Descripción breve de la noticia destacada.</p>
            <p class="author">Autor: María López</p>
        </div>
    </div>
    <span class="carousel-control left" onclick="moveCarousel(-1)">&#10094;</span>
    <span class="carousel-control right" onclick="moveCarousel(1)">&#10095;</span>
</div>

<!-- Barra de Búsqueda -->
<div class="search-form">
    <input type="text" class="search-input" placeholder="Buscar publicaciones...">
</div>

<!-- Grid de Noticias -->
<div class="news-grid">
    <div class="news-card large">
        <img src="./img/news_large1.jpg" alt="Imagen de la Publicación">
        <div class="news-card-content">
            <h2>Título de la Noticia Grande 1</h2>
            <p>Descripción breve de la noticia.</p>
            <p class="author">Autor: Laura Sánchez</p>
        </div>
    </div>
    <div class="news-card">
        <img src="./img/news_small1.jpg" alt="Imagen de la Publicación">
        <div class="news-card-content">
            <h2>Título de la Noticia Pequeña 1</h2>
            <p>Descripción breve de la noticia.</p>
            <p class="author">Autor: Pedro Martínez</p>
        </div>
    </div>
    <div class="news-card">
        <img src="./img/news_small2.jpg" alt="Imagen de la Publicación">
        <div class="news-card-content">
            <h2>Título de la Noticia Pequeña 2</h2>
            <p>Descripción breve de la noticia.</p>
            <p class="author">Autor: Carla Rodríguez</p>
        </div>
    </div>
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
