<style>
    * ----- HEADER SECTION ----- */

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        /* ----- BANNER SECTION ------ */
        
        /* Ya que no usan las variables correctamente se tiene que poner la tipografia de la siguiente manera */
        
        *{
            font-family: "Montserrat", sans-serif;
        }
        

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

.header{
    display: flex;
    background-color: #FFFFFF;
    justify-content: space-between;
    align-items: center;
    container-type: inline-size; /* Definimos el contenedor para las consultas */
    container-name: header;
    /* position: sticky;
    top:0; */
    box-shadow: 0 0.4px 0.2px rgba(0, 0, 0, 0.1000);
    min-width: 100%;
}
.header a{
    display: flex;
}
.header__open-nav-button{
    font-size: 3rem;
    font-weight: 600;
    position: absolute;
    right: 40px;
}

.header__checkbox{
    display: none;
}

.header__nav-list{
    display: flex;
    flex-direction: column;
    height: 40vh;
    margin: auto;
    justify-content: space-evenly;  
}

.header__nav{
    display: none;
    background-color: #FFFFFF;
    position: absolute;
    height: 100vh;
    width: 100vw;
    top: 0;
    z-index: -1;
}

.header__checkbox:checked ~ .header__nav{
    display: flex;
}

.header__logo{
    width: 200px;
    margin: 10px 20px;
    cursor: pointer;  /* Cambia el cursor a una mano al pasar sobre el logo */
    transition: transform 0.3s ease;  /* Suaviza la transición al pasar el mouse */
}

.header__logo-container img{
    min-height: 100px;
    width: 10rem;
}

.header__nav-item{
    list-style: none;
}

.header__nav-item a{
    text-decoration:none;
    color: #099018;
}

.header__nav-item a:is(:active,:hover){
    text-decoration: underline;
}



/* ----- HEADER QUERIES ------ */


@container header (min-width: 750px){
    .header__nav{
        display: block;
        position: static;
        height: auto;
        justify-content: space-evenly;
        width: auto;
    }

    .header__nav-list{
        flex-direction: row;
        height: auto;
        gap: 20px;
        margin-right: 40px;
    }

    .header__open-nav-button{
        display: none;
    }

}

header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }


header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

/* ----- END QUERIES ------ */

.block{
    height: 100px;
    width: 100vw;
}

</style>


<!-- HEADER SECTION -->
<header class="header">
        <input type="checkbox" class="header__checkbox" id="open-menu">

        <label for="open-menu" class="header__open-nav-button" role="button">=</label>

        <div class="header__logo-container">
            <a href="index.php?vista=home_landing">
                <img src="./img/logo adeconta header.svg" alt="Logo de adeconta" class="header__logo">
            </a>
        </div>

        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a href="index.php?vista=servicios">Servicios</a></li>
                <li class="header__nav-item"><a href="index.php?vista=publicaciones">Publicaciones</a></li>
                <li class="header__nav-item"><a href="index.php?vista=eventos">Eventos</a></li>
                <li class="header__nav-item"><a href="index.php?vista=nosotros">Nosotros</a></li>
                <li class="header__nav-item"><a href="index.php?vista=contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div class="block">

    </div>
    
    <!-- HEADER SECTION -->