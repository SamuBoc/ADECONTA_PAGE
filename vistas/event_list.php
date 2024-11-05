<div class="container is-fluid mb-6">
    <h1 class="title">Eventos</h1>
    <h2 class="subtitle">Lista de eventos</h2>
</div>

<div class="container pb-6 pt-6">  
    <?php
        require_once "./php/main.php";

        # Eliminar evento #
        if(isset($_GET['event_id_del'])){
            require_once "./php/evento_eliminar.php";
        }

        $pagina = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $pagina = $pagina > 0 ? $pagina : 1;

        $pagina = limpiar_cadena($pagina);
        $url = "index.php?vista=event_list&page=";
        $registros = 10;
        $busqueda = "";

        # Paginador eventos #
        require_once "./php/evento_lista.php";
    ?>
</div>
