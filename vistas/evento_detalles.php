
<style>
    /* ----- HEADER SECTION ----- */

/* Ya que no usan las variables correctamente se tiene que poner la tipografia de la siguiente manera */

*{
    font-family: "Montserrat", sans-serif;
}

body{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    overflow-x: hidden; /* ocultar barra horizontal */;
    width: 100%;
}

/* -----  HEADER SECTION ---- */

body, div, ul, nav, header, footer, a, li, label{
    padding: 0;
    margin: 0;
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
/* ----- BANNER SECTION ------ */

/* Ya que no usan las variables correctamente se tiene que poner la tipografia de la siguiente manera */

*{
    font-family: "Montserrat", sans-serif;
}


.main{
    display: flex;
    container-name: banner;
    min-height: 100rem;
    max-height: 100rem;
}

.main__wrapper{
    display: flex;
    flex-grow: 1;
    flex-direction: column;
}

.banner__wrapper-container{
    background-image: linear-gradient(rgba(0, 0, 0, 0.700),rgba(0, 0, 0, 0.700)),url(./img/pexels-pixabay-416320.webp);     
    background-size: cover;
    display: grid;
    height: 85vh;
    background-position: center;
    place-content: center;
    justify-items: center;
    flex-grow: 1;    
    flex-direction: column; /* Para que los h1 y h2 se alineen verticalmente */
    justify-content: center; /* Centra verticalmente el contenido */
    align-items: center; /* Centra horizontalmente el contenido */
     text-align: center; /* Alinea el texto al centro */
    color: #FFFFFF; /* Color del texto */
    padding: 15px 10px; /* Espaciado interno para evitar que el texto toque los bordes */
    text-overflow: ellipsis;
}

.banner__wrapper-container h1{
    font-weight: 700;
}



.banner__wrapper-container h2{
    font-weight: 200;
    font-style: italic;
}

.banner__wrapper-container h1, .banner__wrapper-container h2{
    font-size: calc(3.5vw + 1rem);
    color: #FFFFFF;    
    word-wrap: break-word; /* Asegura que el texto se ajuste dentro de su contenedor */
}

.banner__wrapper-container h2{
   font-size: calc(4vw + 1.5rem);
}

@media screen and (max-width: 800px){
    .banner__wrapper-container{
        min-height:70vh;
    }
}


/* ----- END BANNER SECTION ------ */

        


        .container h1{
            font-size: calc(1.2vw + 1.5rem);
        }
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 80px 0;
        }
        .event-details, .speaker-info {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 40px;
            margin-bottom: 40px;
            flex-basis: calc(50% - 20px);
        }
        .event-details h2, .speaker-info h2 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 25px;
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
            .event-details, .speaker-info {
                flex-basis: 100%;
            }
        }
        .description{
            margin: 5px 0px 15px 0px;

        }

/* ---- SECTION GRID MAIN ----- */

.grid-section {
    display: grid;
    gap: 1rem; /* Espacio entre los elementos */
    grid-template-columns: repeat(2, 1fr); /* Dos columnas de igual tamaño en pantallas grandes */
    padding: 1rem;
}

.speaker-item h3{
    font-size: 20px;
}

/* Pantallas pequeñas: Una columna */
@media (max-width: 768px) {
    .grid-section {
        grid-template-columns: 1fr; /* Solo una columna en pantallas pequeñas */
    }

    .flyer-section, .container-content {
        margin-bottom: 1rem; /* Agregar espacio entre las secciones */
    }
}
</style>

<?php
require_once "./php/main.php";

// Obtener el ID del evento desde la URL
$event_id = isset($_GET['event']) ? (int)$_GET['event'] : 0;

if ($event_id <= 0) {
    echo "<p>Error: evento no encontrado</p>";
    exit();
}

// Conexión a la base de datos
$conexion = conexion();

// Consulta de detalles del evento
$consulta_evento = "
    SELECT e.*, 
           COALESCE(p.name, 'No especificado') AS platform_name,
           COALESCE(u.address, 'No especificado') AS ubication_address
    FROM events e
    LEFT JOIN platforms p ON e.platform_id = p.id
    LEFT JOIN ubication u ON e.location_id = u.id
    WHERE e.id = :event_id
";

$consulta_speakers = "
    SELECT s.name, s.description
    FROM speaker_event se
    JOIN speakers s ON se.speaker_id = s.id
    WHERE se.event_id = :event_id
";

try {
    // Ejecutar la consulta del evento
    $stmt_evento = $conexion->prepare($consulta_evento);
    $stmt_evento->bindValue(':event_id', $event_id, PDO::PARAM_INT);
    $stmt_evento->execute();
    $evento = $stmt_evento->fetch();

    if (!$evento) {
        echo "<p>Error: evento no encontrado</p>";
        exit();
    }

    // Ejecutar la consulta de los speakers asociados al evento
    $stmt_speakers = $conexion->prepare($consulta_speakers);
    $stmt_speakers->bindValue(':event_id', $event_id, PDO::PARAM_INT);
    $stmt_speakers->execute();
    $speakers = $stmt_speakers->fetchAll();

    if(!isset( $evento['photo'] )) {
        $evento['photo'] = 'pexels-mikhail-nilov-6592658.jpg';
    }

    // Mostrar la estructura HTML del evento
    ?>
    <section>
        <div class="banner__wrapper-container">
            <h1><?php echo htmlspecialchars($evento['name']); ?></h1>
            <p><?php echo htmlspecialchars($evento['description']); ?></p>
        </div>
    </section>
    
    <section class="grid-section">
        <!-- SECTION FLYER -->
        <section class="flyer-section">
            <div class="container flyer-container">
                <img src="./img/events/<?php echo $evento['photo']; ?>" alt="Flyer del <?php echo htmlspecialchars($evento['name']); ?>" class="flyer-image">
            </div>
        </section>

        <!-- SECTION DETAILS -->
        <div class="container-content">
            <div class="event-details">
                <h2>Detalles del Evento</h2>
                <p class="description"><?php echo $evento["description"];?></p>
                <div class="event-meta">
                    <div class="meta-item">
                        <h3>Fecha</h3>
                        <p>
                            <?php  
                                // Diccionario de meses
                                $meses = [
                                    'January' => 'ene',
                                    'February' => 'feb',
                                    'March' => 'mar',
                                    'April' => 'abr',
                                    'May' => 'may',
                                    'June' => 'jun',
                                    'July' => 'jul',
                                    'August' => 'ago',
                                    'September' => 'sep',
                                    'October' => 'oct',
                                    'November' => 'nov',
                                    'December' => 'dic'
                                ];

                                // Diccionario de días de la semana
                                $dias = [
                                    'Sunday' => 'Domingo',
                                    'Monday' => 'Lunes',
                                    'Tuesday' => 'Martes',
                                    'Wednesday' => 'Miércoles',
                                    'Thursday' => 'Jueves',
                                    'Friday' => 'Viernes',
                                    'Saturday' => 'Sábado'
                                ];
                                
                                // Crear un objeto DateTime a partir de la fecha
                                $fecha = new DateTime($evento['date_initial']);
                                
                                // Obtener el día de la semana en inglés y traducirlo al español
                                $dia_semana_ingles = $fecha->format('l'); // 'l' da el nombre completo del día
                                $dia_semana_espanol = $dias[$dia_semana_ingles]; // Traducción al día de la semana en español

                                // Obtener el nombre del mes en inglés y traducirlo al abreviado en español
                                $nombre_mes_ingles = $fecha->format('F'); // 'F' da el nombre completo del mes
                                $nombre_mes_espanol = $meses[$nombre_mes_ingles]; // Traducción al mes abreviado en español

                                // Imprimir la fecha formateada
                                echo htmlspecialchars($dia_semana_espanol . ' ' . $fecha->format('j') . ' ' . $nombre_mes_espanol . ' ' . $fecha->format('Y'));  
                            ?>
                        </p>
                    </div>
                    <div class="meta-item">
                        <h3>Hora</h3>
                        <p>
                            <?php 
                            echo date("g:i a", strtotime($evento['start_time'])); ?> 
                            a 
                            <?php echo date("g:i a", strtotime($evento['end_time'])); 
                            ?>
                        </p>
                    </div>
                    <div class="meta-item">
                        <h3>Modalidad</h3>
                        <p><?php echo htmlspecialchars($evento['platform_name'] ?: $evento['ubication_address']); ?></p>
                    </div>
                    <div class="meta-item">
                        <h3>Tipo de Evento</h3>
                        <p><?php echo htmlspecialchars($evento['type']); ?></p>
                    </div>
                </div>
                <div class="price-info">
                    <h3>Inversión</h3>
                    <p>Precio inicial: $<?php echo htmlspecialchars(number_format($evento['cost_initial'], 0, ',', '.')); ?></p>
                    <p>Precio con descuento: $<?php echo htmlspecialchars(number_format($evento['cost_sub'], 0, ',', '.')); ?></p>
                </div>
                <a href="<?php echo htmlspecialchars($evento['link']); ?>" class="cta-button" target="_blank">Inscríbete Ahora</a>
            </div>

            <div class="speaker-info">
                <h2>Ponentes</h2>
                <?php if (count($speakers) > 0): ?>
                    <?php foreach ($speakers as $speaker): ?>
                        <div class="speaker-item">
                            <h3><?php echo htmlspecialchars($speaker['name']); ?></h3>
                            <p><?php echo htmlspecialchars($speaker['description']); ?></p>
                            <br>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Ponentes no especificados.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar conexión
$conexion = null;
?>

