<div class="container is-fluid mb-6">
    <h1 class="title">Publicaciones</h1>
    <h2 class="subtitle">Lista de publicaciones</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar publicación #
        if(isset($_GET['publication_id_del'])){
            require_once "./php/publicacion_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina = 1;
        } else {
            $pagina = (int) $_GET['page'];
            if($pagina <= 1){
                $pagina = 1;
            }
        }

        $pagina = limpiar_cadena($pagina);
        $url = "index.php?vista=publication_list&page="; /* <== */
        $registros = 15;  // Número de publicaciones por página
        $busqueda = "";  // Variable para búsqueda

        # Paginador para las publicaciones #
        require_once "./php/publicacion_lista.php";
    ?>
</div>
