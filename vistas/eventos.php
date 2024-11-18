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
    height: 600px;
    background-position: center;
    place-content: center;
    justify-items: center;
    flex-grow: 1;    
    flex-direction: column; /* Para que los h1 y h2 se alineen verticalmente */
    justify-content: center; /* Centra verticalmente el contenido */
    align-items: center; /* Centra horizontalmente el contenido */
     text-align: center; /* Alinea el texto al centro */
    color: #FFFFFF; /* Color del texto */
    padding: 100px 20px; /* Espaciado interno para evitar que el texto toque los bordes */
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
    font-size: calc(3vw + 1rem);
    max-height: 70%;
    color: #FFFFFF;    
    max-width: 70%; /* Limita la expansión del texto */
    word-wrap: break-word; /* Asegura que el texto se ajuste dentro de su contenedor */
}

.banner__wrapper-container h2{
   font-size: calc(2.5vw + 1.5rem);
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



        :root {
            --primary-color: #4CAF50;
            --primary-light: #81C784;
            --primary-dark: #388E3C;
            --white: #FFFFFF;
            --light-gray: #F5F5F5;
            --text-color: #333333;
        }
        
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .event-card {
            background-color: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
        
        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }
        
        .event-card-content {
            padding: 1.5rem;
        }
        
        .event-card h2 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .event-card p {
            margin-bottom: 0.5rem;
        }
        
        .event-card .btn {
            display: block;
            text-align: center;
            margin-top: 1rem;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .event-card .btn:hover {
            background-color: var(--primary-dark);
        }
        
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* ----- PAGINADOR ----- */

        /* ----- PAGINADOR MEJORADO ----- */

        .paginador {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
            font-family: "Montserrat", sans-serif;
        }

        .paginador p {
            margin: 0 15px;
            font-size: 1rem;
            color: var(--text-color);
            font-weight: 600;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .pagination .pagination-previous,
        .pagination .pagination-next {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: var(--primary-light);
            color: var(--white);
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .pagination .pagination-previous:hover,
        .pagination .pagination-next:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .pagination .pagination-link {
            padding: 10px 15px;
            border-radius: 5px;
            background-color: transparent;
            color: var(--primary-color);
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .pagination .pagination-link:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
        }

        .pagination .pagination-link.is-current {
            background-color: var(--primary-color);
            color: var(--white);
            pointer-events: none; /* Deshabilitar el botón activo */
        }

        .pagination .pagination-ellipsis {
            padding: 0 10px;
            color: var(--text-color);
        }
    
        /* FORMULARIO DE BÚSQUEDA */
.search-form {
    display: flex;
    flex-wrap: wrap; /* Permite que los elementos se acomoden en una nueva línea si es necesario */
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

/* Input de búsqueda sin bordes */
.search-input {
    flex: 1;
    padding: 12px;
    border: none;
    font-size: 1rem;
    background-color: #FFFFFF; /* Fondo gris claro */
    border-radius: 5px 0 0 5px; /* Solo bordes izquierdo redondeados */
    color: #333;
    max-width: 60%;
    border: 1px solid #d3d3d3; /* Borde gris claro */
}

/* Botón de búsqueda */
.search-button {
    padding: 12px 20px;
    border: none;
    background-color: #2d8659; /* Verde oscuro elegante */
    color: white;
    font-size: 1rem;
    border-radius: 0 5px 5px 0; /* Solo bordes derecho redondeados */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-button:hover {
    background-color: #246547; /* Verde más oscuro al pasar el ratón */
}

/* Select de filtro */
.filter-wrapper select {
    padding: 12px;
    border: none;
    background-color: #FFFFFF;
    font-size: 1rem;
    color: #333;
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer;
    flex: 1;
    border: 1px solid #d3d3d3; /* Borde gris claro */
}

/* Responsive para pantallas más pequeñas */
@media (max-width: 600px) {
    .search-form {
        flex-direction: column;
        gap: 5px;
        align-items: center;
        justify-content: center;
    }

    .search-input,
    .search-button,
    .filter-wrapper select {
        width: 60%;
        border-radius: 5px; /* Bordes redondeados en dispositivos móviles */
    }
}

.event-pasado{
    opacity: 0.5;
}

</style>

<section class="banner__wrapper-container">
    <h1>Eventos</h1>
    <h2>Experimenta la excelencia en cada uno de nuestros eventos</h2>
</section>

<!-- Barra de búsqueda y filtro -->
<form class="search-form" method="GET" action="index.php">
    <input type="hidden" name="vista" value="eventos"> <!-- Mantener la vista en eventos -->
    <input type="text" name="search" class="search-input" placeholder="Buscar eventos..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit" class="search-button">Buscar</button>
    <div class="filter-wrapper">
        <select name="filter" onchange="this.form.submit()">
            <option value="">Ordenar por</option>
            <option value="fecha_asc" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'fecha_asc' ? 'selected' : ''; ?>>Fecha Ascendente</option>
            <option value="fecha_desc" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'fecha_desc' ? 'selected' : ''; ?>>Fecha Descendente</option>
            <option value="precio_asc" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'precio_asc' ? 'selected' : ''; ?>>Precio Ascendente</option>
            <option value="precio_desc" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'precio_desc' ? 'selected' : ''; ?>>Precio Descendente</option>
        </select>
    </div>
</form>


<?php
require_once "./php/main.php";

// Inicializar las variables de paginación
$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$pagina = $pagina > 0 ? $pagina : 1;

$pagina = limpiar_cadena($pagina);
$url = "index.php?vista=eventos&page=";
$registros = 10; // Cantidad de registros por página
$busqueda = "";

// Verifica si hay una búsqueda
if (isset($_GET['search'])) {
    $busqueda = limpiar_cadena($_GET['search']);
}

// Obtener filtro
$filtro = isset($_GET['filter']) ? limpiar_cadena($_GET['filter']) : '';

// Conexión a la base de datos
$conexion = conexion();

$inicio = ($pagina > 0) ? (($pagina * $registros) - $registros) : 0;

// Construir la cláusula ORDER BY según el filtro
switch ($filtro) {
    case 'fecha_asc':
        $orden = 'ORDER BY e.date_initial ASC';
        break;
    case 'fecha_desc':
        $orden = 'ORDER BY e.date_initial DESC';
        break;
    case 'precio_asc':
        $orden = 'ORDER BY e.cost_initial ASC';
        break;
    case 'precio_desc':
        $orden = 'ORDER BY e.cost_initial DESC';
        break;
    default:
        $orden = 'ORDER BY e.name ASC';
}

// Consulta de eventos
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
    $orden
    LIMIT :inicio, :registros
";

$consulta_total = "SELECT COUNT(id) FROM events WHERE name LIKE :busqueda OR type LIKE :busqueda";

try {
    // Preparar y ejecutar la consulta de datos
    $stmt_datos = $conexion->prepare($consulta_datos);
    $stmt_datos->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);
    $stmt_datos->bindValue(':inicio', $inicio, PDO::PARAM_INT);
    $stmt_datos->bindValue(':registros', $registros, PDO::PARAM_INT);
    $stmt_datos->execute();
    $datos = $stmt_datos->fetchAll();

    // Preparar y ejecutar la consulta total
    $stmt_total = $conexion->prepare($consulta_total);
    $stmt_total->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);
    $stmt_total->execute();
    $total = (int)$stmt_total->fetchColumn();

    $Npaginas = ceil($total / $registros);

    // Construcción de la sección de tarjetas
    echo '<section>
            <div class="container">
                <div class="events-grid">';

    if ($total >= 1 && $pagina <= $Npaginas) {
        foreach ($datos as $rows) {
            $speaker_names = htmlspecialchars($rows['speaker_names'] ?? 'No hay ponentes');  // Manejar si no hay ponentes
        
            if (!isset($rows['photo'])) {
                $rows['photo'] = 'pexels-mikhail-nilov-6592658.jpg';
            }
        
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
        
            // Crear un objeto DateTime a partir de la fecha en $rows
            $fecha = new DateTime($rows['date_initial']);
        
            // Obtener el día de la semana en inglés y traducirlo al español
            $dia_semana_ingles = $fecha->format('l'); // 'l' da el nombre completo del día
            $dia_semana_espanol = $dias[$dia_semana_ingles]; // Traducción al día de la semana en español
        
            // Obtener el nombre del mes en inglés y traducirlo al abreviado en español
            $nombre_mes_ingles = $fecha->format('F'); // 'F' da el nombre completo del mes
            $nombre_mes_espanol = $meses[$nombre_mes_ingles]; // Traducción al mes abreviado en español
        
            // Formatear la fecha
            $fecha_formateada = htmlspecialchars($dia_semana_espanol . ' ' . $fecha->format('j') . ' ' . $nombre_mes_espanol . ' ' . $fecha->format('Y'));
        
            // Comprobar si el evento ya ha pasado
            $clase_evento = (new DateTime() > $fecha) ? 'event-pasado' : '';
        
            // Ahora puedes usar $fecha_formateada en tu echo
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
        
    } else {
        echo '<div class="event-card">
                <p>No hay registros en el sistema</p>
              </div>';
    }

    echo '  </div>
          </div>
          </section>';

    // Paginación
    if ($total >= 1 && $pagina <= $Npaginas) {
        echo '<nav class="pagination">';
        // Anterior
        if ($pagina > 1) {
            echo '<a href="' . $url . ($pagina - 1) . '" class="btn">Anterior</a>';
        }
        // Número de páginas
        for ($i = 1; $i <= $Npaginas; $i++) {
            if ($pagina == $i) {
                echo '<span class="current-page">' . $pagina . '</span>';
            } else {
                echo '<a href="' . $url . $i . '" class="btn">' . $i . '</a>';
            }
        }
        // Siguiente
        if ($pagina < $Npaginas) {
            echo '<a href="' . $url . ($pagina + 1) . '" class="btn">Siguiente</a>';
        }
        echo '</nav>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
<style>
    /* ----- NUEVAS CLASES PARA LOS EVENTOS ----- */

    .year-container {
        margin: 20px 0;
    }

    .events-year-container {
        margin-bottom: 40px;
    }

    .year-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: var(--primary-color);
    }

    .events-grid-container {
        display: flex;
        flex-direction: column; /* Coloca los eventos en una columna */
        gap: 20px; /* Espaciado entre eventos */
    }

    .event-item-container {
        display: flex;
        flex-direction: row; /* Imagen e información lado a lado */
        gap: 15px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 8px;
        background-color: #f9f9f9;
        width: 100%; /* Ocupa el 100% del contenedor */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .event-item-info {
        flex: 2; /* La descripción ocupa más espacio */
    }

    .event-item-photo {
        flex: 1; /* La imagen ocupa menos espacio */
    }

    .event-item-photo img {
        max-width: 100%;
        border-radius: 5px;
    }

    /* ----- PAGINADOR NO SE MODIFICA ----- */

    /* ----- FORMULARIO DE BÚSQUEDA (SIN CAMBIOS) ----- */
    .search-form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin: 20px 0;
    }

    .search-input {
        flex: 1;
        padding: 12px;
        border: none;
        font-size: 1rem;
        background-color: #FFFFFF;
        border-radius: 5px 0 0 5px;
        color: #333;
        max-width: 60%;
        border: 1px solid #d3d3d3;
    }

    .search-button {
        padding: 12px 20px;
        border: none;
        background-color: #2d8659;
        color: white;
        font-size: 1rem;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #246547;
    }

    .filter-wrapper select {
        padding: 12px;
        border: none;
        background-color: #FFFFFF;
        font-size: 1rem;
        color: #333;
        border-radius: 5px;
        cursor: pointer;
        flex: 1;
        border: 1px solid #d3d3d3;
    }

    @media (max-width: 600px) {
        .search-form {
            flex-direction: column;
            gap: 5px;
            align-items: center;
            justify-content: center;
        }

        .search-input,
        .search-button,
        .filter-wrapper select {
            width: 60%;
            border-radius: 5px;
        }
    }

    .event-pasado {
        opacity: 0.5;
    }
</style>


<?php
$eventos_por_ano = []; 

foreach ($datos as $rows) {
    $fecha = new DateTime($rows['date_initial']);
    $anio = $fecha->format('Y');

    if (!isset($eventos_por_ano[$anio])) {
        $eventos_por_ano[$anio] = [];
    }

    $eventos_por_ano[$anio][] = $rows;
}

echo "<section>";
echo '<div class="container">';

foreach ($eventos_por_ano as $anio => $eventos) {
    echo '<div class="events-year-container">';
    echo '<h2 class="year-title">' . htmlspecialchars($anio) . '</h2>';

    // Contenedor para los eventos del año
    echo '<div class="events-grid-container">';

    foreach ($eventos as $evento) {
        if (!isset($evento['photo'])) {
            $evento['photo'] = 'pexels-mikhail-nilov-6592658.jpg';
        }

        // Contenedor individual de cada evento
        echo '<div class="event-item-container">';
        echo '<div class="event-item-info">';
        echo '<p>' . htmlspecialchars($evento['description']) . '</p>';
        echo '<p>' . htmlspecialchars($evento['date_initial']) . '</p>';
        echo '</div>';  

        echo '<div class="event-item-photo">';
        echo '<img src="./img/events/' . htmlspecialchars($evento["photo"]) . '" alt="' . htmlspecialchars($evento['name']) . '">';
        echo '</div>';
        echo '</div>'; // Cierra el contenedor individual del evento
    }

    echo '</div>'; // Cierra la grilla de eventos
    echo '</div>'; // Cierra el contenedor del año
}

echo "</div>";
echo "</section>";
?>


<script>
    document.querySelectorAll('.mostrar-mas-btn').forEach(button => {
    button.addEventListener('click', function() {
        const eventosOcultos = this.previousElementSibling;
        const eventos = eventosOcultos.querySelectorAll('.evento-card');
        
        eventos.forEach(evento => {
            evento.style.display = 'flex';
        });
        
        this.style.display = 'none'; // Ocultar el botón una vez se muestran los eventos
    });
});

    const changeColor = document.getElementById('')

</script>