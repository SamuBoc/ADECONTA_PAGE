<div class="container is-fluid mb-6">
    <h1 class="title">Publicaciones</h1>
    <h2 class="subtitle">Buscar publicación</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
    require_once "./php/main.php";

    // Procesar el buscador
    if (isset($_POST['modulo_buscador'])) {
        require_once "./php/buscador.php";
    }

    // Si no hay búsqueda activa
    if (!isset($_SESSION['busqueda_publicacion']) || empty($_SESSION['busqueda_publicacion'])) {
        ?>
        <div class="columns">
            <div class="column">
                <form action="" method="POST" autocomplete="off">
                    <input type="hidden" name="modulo_buscador" value="publicacion">   
                    <div class="field is-grouped">
                        <p class="control is-expanded">
                            <input class="input is-rounded" type="text" name="txt_buscador" 
                                   placeholder="¿Qué estas buscando?" 
                                   pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30">
                        </p>
                        <p class="control">
                            <button class="button is-info" type="submit">Buscar</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <?php
    } else {
        // Si hay una búsqueda activa
        ?>
        <div class="columns">
            <div class="column">
                <form class="has-text-centered mt-6 mb-6" action="" method="POST" autocomplete="off">
                    <input type="hidden" name="modulo_buscador" value="publicacion"> 
                    <input type="hidden" name="eliminar_buscador" value="publicacion">
                    <p>Estas buscando <strong>“<?php echo htmlspecialchars($_SESSION['busqueda_publicacion']); ?>”</strong></p>
                    <br>
                    <button type="submit" class="button is-danger is-rounded">Eliminar búsqueda</button>
                </form>
            </div>
        </div>
        <?php
        // Eliminar publicación
        if (isset($_GET['publication_id_del'])) {
            require_once "./php/publicacion_eliminar.php";
        }

        // Paginación
        $pagina = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $pagina = max(1, limpiar_cadena($pagina));
        
        $url = "index.php?vista=publication_list&page="; // Enlace para la paginación
        $registros = 15; // Número de registros por página
        $busqueda = $_SESSION['busqueda_publicacion'];

        // Mostrar lista de publicaciones
        require_once "./php/publicacion_lista.php";
    }
    ?>
</div>
