<style>
    /* ----- HEADER SECTION ----- */

    /* Ya que no usan las variables correctamente se tiene que poner la tipografia de la siguiente manera */

    * {
        font-family: "Montserrat", sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        overflow-x: hidden;
        /* ocultar barra horizontal */
        ;
        width: 100%;
    }

    /* -----  HEADER SECTION ---- */

    body,
    div,
    ul,
    nav,
    header,
    footer,
    a,
    li,
    label {
        padding: 0;
        margin: 0;
    }

    /* ----- END QUERIES ------ */


    /* --- FOOTER STYLES --- */

    /* Estilos generales para el footer */
    .main__wrapper-footer {
        background-color: rgba(9, 144, 24, 1);
        /* Fondo verde */
        padding-bottom: 20px;
        /* Más espacio para mayor claridad */
        color: white;
        min-width: 250px;
        text-align: center;
        /* Centrar texto en pantallas pequeñas */
    }

    /* Contenedor principal que agrupa el menú y los iconos */
    .main__wrapper__footer-box {
        display: flex;
        flex-direction: column;
        /* Columnas en móviles */
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        gap: 30px;
        /* Separación entre secciones */
    }

    /* Estilos para el menú */
    .main__wrapper__footer-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .main__wrapper__footer__ul-li {
        margin-bottom: 10px;
        font-weight: 300;
        font-size: 16px;
        color: white;
        transition: opacity 0.3s ease;
    }

    .main__wrapper__footer__ul-li a {
        text-decoration: none;
        color: #FFFFFF;
        transition: color 0.3s ease;
    }

    .main__wrapper__footer__ul-li:hover {
        cursor: pointer;
        opacity: 0.8;
    }

    .main__wrapper__footer__ul-li:first-child {
        font-weight: 700;
        /* Destaca el primer ítem del menú */
    }

    /* Estilos para los iconos sociales */
    .main__wrapper__footer__social-ul {
        list-style: none;
        display: flex;
        gap: 15px;
        padding: 0;
        margin: 0;
    }

    .main__wrapper__footer__social__ul-li img {
        width: 28px;
        /* Tamaño un poco mayor para mejor visibilidad */
        height: 28px;
        transition: opacity 0.3s ease;
    }

    .main__wrapper__footer__social__ul-li img:hover {
        cursor: pointer;
        opacity: 0.8;
    }

    /* Divider (Separador) */
    .main__wrapper__footer-divider {
        border: none;
        border-bottom: 2px solid #FFFFFF;
        /* Grosor de 2px para un look más limpio */
        width: 90%;
        /* Ajusta el ancho al 90% del contenedor */
        margin: 20px auto;
        /* Centra el divisor horizontalmente */
    }

    /* Copyright */
    .main__wrapper__footer-copyright {
        margin: 10px 0;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        /* Texto un poco más suave */
    }

    /* --- MEDIA QUERIES --- */
    @media screen and (min-width: 768px) {
        .main__wrapper__footer-box {
            flex-direction: row;
            /* Coloca el menú y los iconos en fila en pantallas grandes */
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .main__wrapper__footer-divider {
            width: 95%;
            /* Ajuste de ancho para pantallas grandes */
        }
    }



    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    /* ----- BANNER SECTION ------ */

    /* Ya que no usan las variables correctamente se tiene que poner la tipografia de la siguiente manera */

    * {
        font-family: "Montserrat", sans-serif;
    }


    .main {
        display: flex;
        container-name: banner;
        min-height: 100rem;
        max-height: 100rem;
    }

    .main__wrapper {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
    }

    .banner__wrapper-container {
        background-image: linear-gradient(rgba(0, 0, 0, 0.372), rgba(0, 0, 0, 0.372)), url(./img/banner_main.svg);
        background-size: cover;
        display: grid;
        height: 90vh;
        background-position: center;
        place-content: center;
        justify-items: center;
        flex-grow: 1;
        flex-direction: column;
        /* Para que los h1 y h2 se alineen verticalmente */
        justify-content: center;
        /* Centra verticalmente el contenido */
        align-items: center;
        /* Centra horizontalmente el contenido */
        text-align: center;
        /* Alinea el texto al centro */
        color: #FFFFFF;
        /* Color del texto */
        padding: 10px 20px;
        /* Espaciado interno para evitar que el texto toque los bordes */
        text-overflow: ellipsis;
    }

    .banner__wrapper-container h1 {
        font-weight: 700;
    }



    .banner__wrapper-container h2 {
        font-weight: 200;
        font-style: italic;
    }

    .banner__wrapper-container h1,
    .banner__wrapper-container h2 {
        font-size: calc(4vw + 1rem);
        max-height: 70%;
        color: #FFFFFF;
        max-width: 70%;
        /* Limita la expansión del texto */
        word-wrap: break-word;
        /* Asegura que el texto se ajuste dentro de su contenedor */
    }

    .banner__wrapper-container h2 {
        font-size: calc(4vw + 1.5rem);
    }

    @media screen and (max-width: 800px) {
        .banner__wrapper-container {
            min-height: 70vh;
        }
    }


    /* ----- END BANNER SECTION ------ */




    .container h1 {
        font-size: calc(1.2vw + 1.5rem);
    }

    header {
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        width: 100%;
        z-index: 1000;
    }

    .logo {
        max-width: 150px;
        padding: 15px 0;
    }

    .hero {
        color: white;
        text-align: center;
    }

    .hero h1 {
        font-size: calc(3vw + 1.5rem);
        margin-bottom: 20px;
        font-weight: 700;
    }

    .hero p {
        font-size: 1.2em;
        max-width: 600px;
        margin: 0 auto 30px;
    }

    .flyer-section {
        background-color: #ffffff;
        padding: 80px 0;
    }

    .flyer-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flyer-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 80px 0;
    }

    .event-details,
    .speaker-info {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-bottom: 40px;
        flex-basis: calc(50% - 20px);
    }

    .event-details h2,
    .speaker-info h2 {
        color: #4CAF50;
        margin-bottom: 20px;
    }

    .event-meta {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .meta-item {
        flex-basis: calc(50% - 10px);
        margin-bottom: 20px;
    }

    .meta-item h3 {
        font-size: 0.9em;
        color: #888;
        margin-bottom: 5px;
    }

    .meta-item p {
        font-size: 1.1em;
        font-weight: 600;
    }

    .price-info {
        background-color: #f1f8e9;
        border-radius: 8px;
        padding: 20px;
        margin-top: 30px;
    }

    .cta-button {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 15px 30px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 600;
        margin-top: 30px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .cta-button:hover {
        background-color: #45a049;
        transform: translateY(-2px);
    }

    .speaker-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {

        .event-details,
        .speaker-info {
            flex-basis: 100%;
        }
    }




    /* ----- SERVICE SECTION ------ */

    .main__wrapper-service {
        display: grid;
        grid-template-columns: 1fr;
        /* Una columna en dispositivos móviles */
        gap: 20px;
        /* Espacio entre los elementos */
        background-color: #099018;
        padding: 20px;
        height: auto;
    }

    .main__wrapper__service-description,
    main__wrapper__service-boxes {
        display: inline-block;
        grid-row: 1;
    }

    .main__wrapper__service-description {
        margin: 3vh;
        padding-left: 5%;
        padding-bottom: 6%;
        border: none;
        border-left: 3px solid #FFFFFF;
        line-height: 4vh;
    }

    .main__wrapper__service-description h2 {
        margin-bottom: 7vh;
    }


    .button-service-flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main__wrapper__service-description-button {
        display: inline-block;
        justify-self: center;
        margin-top: 28px;
        width: 200px;
        padding: 14px;
    }


    .main__wrapper__service-description p,
    h2 {
        color: #FFFFFF;
    }

    .main__wrapper__service__boxes-item p {
        color: #099018;
        font-weight: 200;
    }

    .main__wrapper__service__boxes-item h3 {
        color: #099018;
        font-weight: 700;
    }

    .main__wrapper__service__boxes-item {
        text-align: center;
        display: inline-block;
        background-color: #FFFFFF;
        max-width: 90%;
        padding: 2% 2% 2% 3%;
        margin: 10px 0px 20px 0px;
        margin-left: 3vh;
        text-align: center;
        min-height: 270px;
    }

    .main__wrapper__service__boxes-item p {
        justify-self: end;
    }


    #mas__informacion {
        font-weight: 700;
    }

    .main__wrapper__service-boxes {
        align-content: center;
        display: grid;
        grid-template-columns: 1fr;
        /* Una columna en móviles */
        gap: 20px;
        width: 100%;
    }


    /* ----- SERVICE QUERIES ------ */


    @media screen and (min-width: 1200px) {
        .main__wrapper-service {
            grid-template-columns: repeat(2, 1fr);
            /* Dos columnas en pantallas medianas */
            justify-content: center;
            align-items: center;
        }

        .main__wrapper__service-description {
            max-width: 330px;
            /* Ajuste para pantallas grandes */
            margin-left: 60px;
        }

        .main__wrapper__service-boxes {
            margin-right: 100px;
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: minmax(200px, auto);
            /* Controla la altura mínima de las filas */
            /* Máximo 3 columnas en pantallas grandes */
        }

        .main__wrapper__service__boxes-item {
            min-width: 300px;
            /* Aumenta el tamaño mínimo de las cajas */
            min-height: 200px;
        }
    }

    /* ----- END SERVICE QUERIES ------ */


    /* US SECTION */

    .main__wrapper-us {
        background-image: linear-gradient(rgba(9, 144, 25, 0.594), rgba(9, 144, 24, 0.594)), url(./img/revistas_banner.png);
        min-height: auto;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: rgb(255, 255, 255, 1);
        display: flex;
        justify-content: center;
        /* Centra el contenido verticalmente */
    }

    .main__wrapper-us p {
        font-size: 2.5vh;
        padding: 6vh;
        font-weight: 317;
    }

    .main__wrapper-us h1 {
        font-size: 6.5vh;
        font-weight: 1117;
        text-align: center;
        /* Asegura que el texto del h1 esté centrado */
    }

    @media screen and (min-width: 1000px) {
        .main__wrapper-us {
            background-size: 170%;
            background-position: left;
            justify-content: flex-start;
            align-items: flex-start;
            background-image: linear-gradient(rgba(9, 144, 24, 0.3), rgba(9, 144, 24, 0.3)), url(./img/revistas_banner.png);

        }

        .main__wrapper-us h1,
        .main__wrapper-us p {
            text-align: start;
            padding-top: 15vh;
            padding-left: 10vh;
            max-width: 30vw;
            line-height: 3.5vh;
        }

        .main__wrapper-us h1 {
            font-size: 10vh;
        }

        .main__wrapper-us p {
            padding-top: 20vh;
            padding-bottom: 10vh;
        }
    }

    /* END US SECTION */

    /* ----- CONTACT SECTION ------ */

    .main__wrapper-contact {
        display: flex;
        flex-direction: column;
        /* Alinea los elementos en una columna */
        align-items: center;
        /* Centra los elementos horizontalmente */
        justify-content: center;
        /* Centra los elementos verticalmente */
        max-width: 100vw;
        height: 100vh;
        padding: 4rem 1rem 7rem 1rem;
    }

    .main__wrapper__contact-inputs {
        display: flex;
        flex-direction: column;
        /* Alinea los inputs en una columna */
        width: 100%;
        max-width: 70%;
        /* Limita el ancho máximo de los inputs */
        padding: 0 5px;
        /* Agrega algo de padding horizontal si es necesario */
    }

    .main__wrapper-contact input,
    .main__wrapper-contact button,
    .main__wrapper-contact textarea {
        width: 100%;
        margin: 10px 0;
        /* Ajusta el margen para los inputs y botón */
        margin-top: 20px;
        padding: 25px;
        box-sizing: border-box;
        /* Asegura que el padding no afecte el tamaño total */
        border-radius: 10px;
        background-color: #D9D9D947;
        border: none;
        color: #099018;
    }

    .main__wrapper-contact textarea {
        resize: none;
        padding: 14px;
        font-weight: 6px;
        font-family: 'Montserrat', sans-serif;
        padding-left: 25px;
        min-height: 200px;
    }


    /* Estilo cuando los inputs y botones están enfocados */
    .main__wrapper-contact input:focus,
    .main__wrapper-contact button:focus {
        outline: none;
        /* Elimina el contorno predeterminado del navegador */
    }

    .main__wrapper-contact button {
        background-color: #099018;
        color: #FFFFFF;
        border: none;
        cursor: pointer;
        width: 20vw;
        justify-self: center;
        align-self: center;
    }

    .main__wrapper-contact h2 {
        margin-bottom: 20px;
        /* Espacio entre el título y los inputs */
        color: #099018;
        font-size: 6.5vh;
    }

    /* ----- END CONTACT SECTION ------ */

    /* QUERIES CONTACT SECTION */

    @media screen and (max-width: 700px) {
        .main__wrapper-contact h2 {
            font-size: 4vh;
        }

        .main__wrapper-contact input,
        textarea {
            min-width: 70vw;
        }



        .main__wrapper-contact button {
            min-width: 40vw;
        }


    }


    /* ----- PRESENTATION SECTION ------ */

    .main__wrapper-presentation {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        background-image: url(./img/banner_presentation.png);
        background-size: cover;
        padding: 30px;
        container-type: inline-size;
        container-name: presentation;
        background-position: center;
        align-items: center;
        /* Asegura que los elementos se alineen verticalmente al centro */
        min-height: auto;
        z-index: -2;
        padding-bottom: 2vh;

    }

    .main__wrapper__presentation-title,
    .main__wrapper__presentation-text {
        flex: 1 1 300px;
        margin: 10px;
        text-align: center;

    }

    .main__wrapper__presentation-title h2 {
        padding: 40px;
        font-weight: 700;
        color: #099018;
        margin: 0;
        font-size: calc(0.5vw + 1.5rem);
    }

    .main__wrapper__presentation-text p {
        font-weight: 400;
        padding: 40px;
        margin: 0;
        line-height: 3.5vh;
    }

    /* MEDIA QUERIES PRESENTATION */

    @media screen and (max-width: 800px) {

        .main__wrapper-presentation {
            min-height: auto;
        }

    }

    /* ---- END PRESENTATION ---- */

/* Contenedor principal del carrousel */
.events-grid-container {
    position: relative;  /* Necesario para posicionar los botones */
    width: 100%;
    overflow: hidden;  /* Oculta las tarjetas que se desbordan fuera del área visible */
}

/* Contenedor de las tarjetas dentro del carrousel */
.events-grid {
    display: flex;
    gap: 20px;  /* Espacio entre las tarjetas */
    transition: transform 0.3s ease; /* Animación al mover las tarjetas */
    flex-wrap: nowrap; /* Impide que las tarjetas se apilen */
}

/* Estilos para las tarjetas de eventos */
.event-card {
    flex-shrink: 0; /* Impide que las tarjetas se encojan */
    min-width: 250px;  /* Ancho mínimo de cada tarjeta */
    max-width: 300px;  /* Máximo ancho de la tarjeta */
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

/* Estilo de la imagen dentro de las tarjetas */
.event-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

/* Estilo para el contenido de las tarjetas */
.event-card-content {
    padding: 15px;
}

/* Botones de navegación */
.carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
    z-index: 10;
}

.carousel-button.left {
    left: 10px;
}

.carousel-button.right {
    right: 10px;
}

/* Efecto hover para las tarjetas */
.event-card:hover {
    transform: translateY(-10px);
}

/* Responsividad */
@media (max-width: 768px) {
    .event-card {
        min-width: 200px;  /* Reduce el tamaño mínimo en pantallas más pequeñas */
        max-width: 250px;
    }
}

@media (max-width: 480px) {
    .event-card {
        min-width: 150px;  /* Reduce aún más en pantallas muy pequeñas */
        max-width: 200px;
    }
}

/* Estilos para el botón dentro de las tarjetas */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #28a745; /* Fondo verde */
    color: white;
    text-decoration: none;
    border-radius: 5px; /* Bordes redondeados */
    text-align: center;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

/* Efecto hover para el botón */
.btn:hover {
    background-color: #218838; /* Fondo verde más oscuro al hacer hover */
}

/* Asegurarse de que el botón se vea bien dentro de la tarjeta */
.event-card-content {
    padding: 15px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.event-card-content .btn {
    margin-top: 10px; /* Un pequeño margen arriba del botón */
}


</style>

<!-- ARREGLO TEMPORAL -->

<main>

    <!-- Start banner -->

    <section>
        <div class="banner__wrapper-container">
            <h1>Asociación de contadores
                públicos del Valle del
                Cauca
            </h1>
            <h2>68 años</h2>
        </div>
    </section>

    <!-- End banner -->

    <!-- Start presentation -->

    <section>
        <div class="main__wrapper-presentation">
            <div class="main__wrapper__presentation-title">
                <h2>¿Por que adeconta?</h2>
            </div>

            <div class="main__wrapper__presentation-text">
                <p>
                    El perfil del Contador Publico a nivel Mundial a cambiado, de igual manera el Profesional de la
                    Contaduria se encuentra en la necesidad de adquirir nuevas capacidades que le permitan hacer frente
                    a los desafíos que se presentan a diario en su vida laboral y personal.
                    <br> <br>
                    El mundo actual es cambiante, dinamico y Adeconta esta cambiando para lograr que nuestros asociados
                    adquieran nuevas competencias y refuerzas aquellas que ya poseen. La mejora de dichas competencias
                    permitirá que tambien las empresas a las cuales ellos asesoran puedan lograr superar
                    satisfactoriamente los retos actuales que les plantea la globalización de los mercados.
                </p>
            </div>
        </div>
    </section>

    <!-- End presentation -->

    <?php
require "./php/main.php";

// Conexión usando PDO
$conexion = conexion(); 

// Definir el orden de los eventos (esto lo puedes ajustar si es necesario)
$orden = "ORDER BY e.date_initial DESC";  

// Consulta SQL para obtener los eventos visibles (view = 1)
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
    WHERE e.view = 1  
    GROUP BY e.id
    $orden
";

// Ejecutar la consulta
$stmt = $conexion->prepare($consulta_datos);
$stmt->execute();

// Obtener todos los resultados
$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Contar la cantidad de eventos
$total = count($datos);

echo '<section>
        <div class="container">
            <div class="events-grid-container">'; // Contenedor del carrousel

echo '<div class="events-grid">';  // Contenedor de tarjetas

if ($total >= 1) { 
    foreach ($datos as $rows) {
        $speaker_names = htmlspecialchars($rows['speaker_names'] ?? 'No hay ponentes');  

        if (!isset($rows['photo'])) {
            $rows['photo'] = 'pexels-mikhail-nilov-6592658.jpg';
        }

        // Diccionario de meses
        $meses = [
            'January' => 'ene', 'February' => 'feb', 'March' => 'mar',
            'April' => 'abr', 'May' => 'may', 'June' => 'jun',
            'July' => 'jul', 'August' => 'ago', 'September' => 'sep',
            'October' => 'oct', 'November' => 'nov', 'December' => 'dic'
        ];

        // Diccionario de días de la semana
        $dias = [
            'Sunday' => 'Domingo', 'Monday' => 'Lunes', 'Tuesday' => 'Martes',
            'Wednesday' => 'Miércoles', 'Thursday' => 'Jueves', 'Friday' => 'Viernes', 'Saturday' => 'Sábado'
        ];

        // Crear un objeto DateTime a partir de la fecha en $rows
        $fecha = new DateTime($rows['date_initial']);

        // Obtener el día de la semana en inglés y traducirlo al español
        $dia_semana_ingles = $fecha->format('l'); 
        $dia_semana_espanol = $dias[$dia_semana_ingles]; 

        // Obtener el nombre del mes en inglés y traducirlo al abreviado en español
        $nombre_mes_ingles = $fecha->format('F'); 
        $nombre_mes_espanol = $meses[$nombre_mes_ingles]; 

        // Formatear la fecha
        $fecha_formateada = htmlspecialchars($dia_semana_espanol . ' ' . $fecha->format('j') . ' ' . $nombre_mes_espanol . ' ' . $fecha->format('Y'));

        // Comprobar si el evento ya ha pasado
        $clase_evento = (new DateTime() > $fecha) ? 'event-pasado' : '';

        // Mostrar los datos de los eventos
        echo '<div class="event-card ' . $clase_evento . '">
                <img src="./img/events/' . htmlspecialchars($rows["photo"]) . '" alt="' . htmlspecialchars($rows['name']) . '">
                <div class="event-card-content">
                    <span class="event-type">' . htmlspecialchars($rows['type']) . '</span>
                    <h2>' . htmlspecialchars($rows['name']) . '</h2>
                    <p><i class="far fa-calendar-alt"></i> ' . $fecha_formateada . '</p>
                    <p><i class="far fa-clock"></i> ' . 
                    date("g:i a", strtotime($rows['start_time'])) . ' - ' . 
                    date("g:i a", strtotime($rows['end_time'])) . 
                    '</p>
                    <p><i class="fas fa-map-marker-alt"></i> ' . 
                    htmlspecialchars($rows['ubication_address'] ?: $rows['platform_name']) . 
                    '</p>
                    <a href="index.php?vista=evento_detalles&event=' . htmlspecialchars($rows['id']) . '" class="btn">Más información</a>
                </div>
            </div>';
    }
    echo '  </div>';  // Fin del contenedor de tarjetas

// Botones de navegación del carrousel
echo '<button class="carousel-button left" onclick="moveCarousel(-1)">&#10094;</button>';
echo '<button class="carousel-button right" onclick="moveCarousel(1)">&#10095;</button>';

echo '  </div>
      </div>
      </section>';
} 

?>

    <!-- Start Service -->

    <section>

        <div class="main__wrapper-service">
            <div class="main__wrapper__service-description">
                <h2>Nuestros Servicios</h2>
                <p> En Adeconta le ofrecemos a nuestros asociados una serie de servicios los cuales en conjunto le
                    permiten al Contador Público responder de mejor manera a los desafíos diarios y obtener una
                    representación significativa de uno de los gremios de Contadores con mayor trayectoria en Colombia
                    en defensa de los intereses de los Profesionales de la Contaduría Publica</p>
                <div class="button-service-flex"><button type="button"
                        class="main__wrapper__service-description-button">Conoce mas aqui</button></div>
            </div>
            <div class="main__wrapper__service-boxes">
                <div class="main__wrapper__service__boxes-item">
                    <h3>Mesas Redondas Permanentes</h3>
                    <p> destinadas a brindar espacios
                        de discusión en bien del intercambio académico en los
                        diferentes grupos de Chats y también en espacios físicos.</p>
                    <div class="main__wrapper__service__boxes-button">
                        <p id="mas__informacion">Mas informacion.</p>
                    </div>
                </div>
                <div class="main__wrapper__service__boxes-item">
                    <h3> Actividades de Integración</h3>
                    <p>actividades en las cuales los
                        contadores tengan un espacio de sano esparcimiento y
                        descanso, saliendo del agotador día a día en que se ha envuelto
                        a los profesionales contables en Colombia.</p>
                    <div class="main__wrapper__service__boxes-button">
                        <p id="mas__informacion">Mas informacion.</p>
                    </div>
                </div>
                <div class="main__wrapper__service__boxes-item">
                    <h3>Boletines informativos</h3>
                    <p>A través de la página web de Adeconta
                        y también en las Redes sociales en Instagram y en Facebook.
                    </p>
                    <div class="main__wrapper__service__boxes-button">
                        <p id="mas__informacion">Mas informacion.</p>
                    </div>
                </div>
                <div class="main__wrapper__service__boxes-item">
                    <h3>Seminarios de actualización</h3>
                    <p>Adeconta ofrece una completa
                        programación anual de seminarios, así como , consecuente con
                        las transformaciones legislativas abruptas del país ,
                        conferencias de actualización constante.
                    </p>
                    <div class="main__wrapper__service__boxes-button">
                        <p id="mas__informacion">Mas informacion.</p>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- END SERVICE  -->

    <!-- START US  -->

    <section>
        <!-- START NOSOTROS  -->

        <div class="main__wrapper-us">
            <div class="main__wrapper__us-text">
                <h1>Nosotros</h1>
                <p>LA ASOCIACIÓN DE CONTADORES PÚBLICOS DEL VALLE DEL CAUCA, ADECONTA, nace el 06 de noviembre de 1956,
                    dos meses después de la legalización de la Contaduría Pública en Colombia y de la creación de la
                    Junta Central de Contadores. <br> Hoy en día Adeconta continúa ligada al principio que le dio
                    origen: La profesionalización constante de los Contadores Públicos. Un objetivo primario que se
                    desarrolla en los servicios brindados por la Asociación y se preserva en la calidad académica de sus
                    miembros Adeconta hace parte del Comité Nacional Gremial y permanece en contacto permanente con
                    asociaciones de contadores de diferentes regiones del país. <br> Adeconta suma a su experiencia
                    sesenta y ocho años de espíritu renovador, consecuente con los requerimientos actuales de la
                    profesión Contable y su globalización y avances tecnológicos.</p>
            </div>
        </div>

        <!-- END NOSOTROS -->
    </section>

    <!-- END US -->

    <!-- START CONTACTO -->

    <div class="main__wrapper-contact">
        <h2>Contactanos</h2>
        <div class="main__wrapper__contact-inputs">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Correo">
            <textarea placeholder="Mensaje" id=""></textarea>
            <button>Enviar</button>
        </div>
    </div>

    <!-- END CONTACTO  -->



</main>

<!-- FIN DE ARREGLO TEMPORAL -->

</body>

<script>
    let currentIndex = 0;

function moveCarousel(direction) {
    const grid = document.querySelector('.events-grid');
    const totalWidth = grid.scrollWidth;
    const visibleWidth = grid.clientWidth;
    const cardWidth = document.querySelector('.event-card').offsetWidth + 20; // 20px de gap

    // Asegurarnos de que el índice no sea negativo ni mayor al límite
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = 0; // No puede ir más allá del inicio
    } else if (currentIndex * cardWidth >= totalWidth - visibleWidth) {
        currentIndex = Math.floor((totalWidth - visibleWidth) / cardWidth); // No puede ir más allá del final
    }

    // Aplica el desplazamiento en el eje X
    grid.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

</script>
