<?php require "./inc/session_start.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "./inc/head.php"; ?>
    </head>
    <body>
        <?php

            // Establecer la vista predeterminada
        $vista = isset($_GET['vista']) && !empty($_GET['vista']) ? $_GET['vista'] : "home_landing";

        // Lista de módulos disponibles
        $modulo = ["home_landing", "publicaciones", "eventos", "nosotros", "servicios", "contacto","evento_detalles", "publication_details"];

        // Verificar si el archivo de vista existe
        if (is_file("./vistas/".$vista.".php")) {
            // Si la vista está en el módulo permitido
            if (in_array($vista, $modulo)) {
                include "./inc/navbar_adeconta.php";
                include "./vistas/".$vista.".php";
                include "./inc/button_whatsapp.php";
                include "./inc/footer_adeconta.php";
            } else {
                // Si la vista no está en el módulo permitido, verifica si el usuario está logueado
                if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                    include "./inc/navbar.php";
                    include "./vistas/".$vista.".php";
                    include "./inc/script.php";
                } else {
                    // Si no está logueado, cargar el formulario de login
                    include "./vistas/login.php";
                }
            }
        } else {
            // Si la vista no existe, cargar la página 404
            include "./vistas/404.php";
        }
        ?>
    </body>
</html>