<div class="container is-fluid mb-6">
    <h1 class="title">Plataforma</h1>
    <h2 class="subtitle">Lista de plataformas</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar categoria #
        if(isset($_GET['platform_id_del'])){
            require_once "./php/plataforma_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=platform_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador categoria #
        require_once "./php/plataforma_lista.php";
    ?>
</div>