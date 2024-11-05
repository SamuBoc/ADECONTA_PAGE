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
/* ----- END QUERIES ------ */


/* --- FOOTER STYLES --- */

/* Estilos generales para el footer */
.main__wrapper-footer {
    background-color: rgba(9, 144, 24, 1); /* Fondo verde */
    padding-bottom: 20px; /* Más espacio para mayor claridad */
    color: white;
    min-width: 250px;
    text-align: center; /* Centrar texto en pantallas pequeñas */
}

/* Contenedor principal que agrupa el menú y los iconos */
.main__wrapper__footer-box {
    display: flex;
    flex-direction: column; /* Columnas en móviles */
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 30px; /* Separación entre secciones */
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
    font-weight: 700; /* Destaca el primer ítem del menú */
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
    width: 28px; /* Tamaño un poco mayor para mejor visibilidad */
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
    border-bottom: 2px solid #FFFFFF; /* Grosor de 2px para un look más limpio */
    width: 90%; /* Ajusta el ancho al 90% del contenedor */
    margin: 20px auto; /* Centra el divisor horizontalmente */
}

/* Copyright */
.main__wrapper__footer-copyright {
    margin: 10px 0;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8); /* Texto un poco más suave */
}

/* --- MEDIA QUERIES --- */
@media screen and (min-width: 768px) {
    .main__wrapper__footer-box {
        flex-direction: row; /* Coloca el menú y los iconos en fila en pantallas grandes */
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .main__wrapper__footer-divider {
        width: 95%; /* Ajuste de ancho para pantallas grandes */
    }
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
    background-image: linear-gradient(rgba(0, 0, 0, 0.372),rgba(0, 0, 0, 0.372)),url(./img/banner_main.svg);     
    background-size: cover;
    display: grid;
    height: 90vh;
    background-position: center;
    place-content: center;
    justify-items: center;
    flex-grow: 1;    
    flex-direction: column; /* Para que los h1 y h2 se alineen verticalmente */
    justify-content: center; /* Centra verticalmente el contenido */
    align-items: center; /* Centra horizontalmente el contenido */
     text-align: center; /* Alinea el texto al centro */
    color: #FFFFFF; /* Color del texto */
    padding: 10px 20px; /* Espaciado interno para evitar que el texto toque los bordes */
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
    font-size: calc(4vw + 1rem);
    max-height: 70%;
    color: #FFFFFF;    
    max-width: 70%; /* Limita la expansión del texto */
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


        

/* ----- SERVICE SECTION ------ */

.main__wrapper-service {
    display: grid;
    grid-template-columns: 1fr; /* Una columna en dispositivos móviles */
    gap: 20px; /* Espacio entre los elementos */
    background-color: #099018;
    padding: 20px;
    height: auto;
}

.main__wrapper__service-description, main__wrapper__service-boxes{
    display: inline-block;
    grid-row: 1;
}

.main__wrapper__service-description{
    margin: 3vh;
    padding-left: 5%;
    padding-bottom: 6%;
    border: none;
    border-left: 3px solid #FFFFFF;
    line-height: 4vh;
}

.main__wrapper__service-description h2{
    margin-bottom: 7vh;
}


.button-service-flex{
    display: flex;
    align-items: center;
    justify-content: center;
}

.main__wrapper__service-description-button{
    display: inline-block;
    justify-self: center;
    margin-top: 28px;
    width: 200px;
    padding: 14px;
}


.main__wrapper__service-description p, h2{
    color: #FFFFFF;
}

.main__wrapper__service__boxes-item p{
    color: #099018;
    font-weight: 200;
}

.main__wrapper__service__boxes-item  h3{
    color: #099018;
    font-weight: 700;
}

.main__wrapper__service__boxes-item{
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

.main__wrapper__service__boxes-item p{
    justify-self: end;
}


#mas__informacion{
    font-weight: 700;
}

.main__wrapper__service-boxes {
    align-content: center;
    display: grid;
    grid-template-columns: 1fr; /* Una columna en móviles */
    gap: 20px;
    width: 100%;
}


/* ----- SERVICE QUERIES ------ */


@media screen and (min-width: 1200px) {
    .main__wrapper-service {
        grid-template-columns: repeat(2, 1fr); /* Dos columnas en pantallas medianas */
        justify-content: center;
        align-items: center;
    }

    .main__wrapper__service-description {
        max-width: 330px; /* Ajuste para pantallas grandes */
        margin-left: 60px;
    }

    .main__wrapper__service-boxes { 
        margin-right: 100px;
        grid-template-columns: repeat(2, 1fr); 
        grid-auto-rows: minmax(200px, auto); /* Controla la altura mínima de las filas */
        /* Máximo 3 columnas en pantallas grandes */
    }

    .main__wrapper__service__boxes-item {
        min-width: 300px; /* Aumenta el tamaño mínimo de las cajas */
        min-height: 200px;
    }
}

/* ----- END SERVICE QUERIES ------ */


/* US SECTION */

.main__wrapper-us{
    background-image: linear-gradient(rgba(9, 144, 25, 0.594) , rgba(9, 144, 24, 0.594)), url(./img/revistas_banner.png);
    min-height: auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: rgb(255, 255, 255, 1);
    display: flex;
    justify-content: center; /* Centra el contenido verticalmente */
}

.main__wrapper-us p{
    font-size: 2.5vh;
    padding: 6vh;
    font-weight: 317;
}

.main__wrapper-us h1{
    font-size:6.5vh;
    font-weight: 1117;
    text-align: center; /* Asegura que el texto del h1 esté centrado */
}

@media screen and (min-width: 1000px) {
    .main__wrapper-us{
        background-size: 170%;
        background-position: left;
        justify-content: flex-start;
        align-items: flex-start;
        background-image: linear-gradient(rgba(9, 144, 24, 0.3) , rgba(9, 144, 24, 0.3)), url(./img/revistas_banner.png);

    }

    .main__wrapper-us h1, .main__wrapper-us p{
        text-align: start;
        padding-top: 15vh;
        padding-left: 10vh;
        max-width: 30vw;
        line-height: 3.5vh;
    }

    .main__wrapper-us h1{
        font-size:10vh;
    }

    .main__wrapper-us p{
        padding-top: 20vh;
        padding-bottom: 10vh;
    }
}

/* END US SECTION */

/* ----- CONTACT SECTION ------ */

.main__wrapper-contact {
    display: flex;
    flex-direction: column; /* Alinea los elementos en una columna */
    align-items: center; /* Centra los elementos horizontalmente */
    justify-content: center; /* Centra los elementos verticalmente */
    max-width: 100vw;
    height: 100vh;
    padding: 4rem 1rem 7rem 1rem;
}

.main__wrapper__contact-inputs {
    display: flex;
    flex-direction: column; /* Alinea los inputs en una columna */
    width: 100%;
    max-width: 70%; /* Limita el ancho máximo de los inputs */
    padding: 0 5px; /* Agrega algo de padding horizontal si es necesario */
}

.main__wrapper-contact input,
.main__wrapper-contact button, 
.main__wrapper-contact textarea{
    width: 100%;
    margin: 10px 0; /* Ajusta el margen para los inputs y botón */
    margin-top: 20px;
    padding: 25px;
    box-sizing: border-box; /* Asegura que el padding no afecte el tamaño total */
    border-radius: 10px;
    background-color: #D9D9D947;
    border: none;
    color: #099018;
}

.main__wrapper-contact textarea{
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
    outline: none; /* Elimina el contorno predeterminado del navegador */
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
    margin-bottom: 20px; /* Espacio entre el título y los inputs */
    color: #099018;
    font-size: 6.5vh;
}
/* ----- END CONTACT SECTION ------ */

/* QUERIES CONTACT SECTION */

@media screen and (max-width: 700px){
    .main__wrapper-contact h2{
        font-size: 4vh;
    }

    .main__wrapper-contact input, textarea{
        min-width: 70vw;
    }



    .main__wrapper-contact button{
        min-width: 40vw;
    }

    
}


/* --- WHAT BUTT0N */

/* Estilos del botón de WhatsApp */
.whatsapp-button {
    position: fixed;
    margin-bottom: 15px;
    bottom: 20px;
    right: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #007a33; /* Verde oscuro */
    color: white;
    border-radius: 30px; /* Hacer el botón redondeado */
    padding: 10px 20px; /* Espaciado interno */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    text-decoration: none; /* Quitar subrayado */
    font-weight: bold; /* Texto en negrita */
    font-size: 14px; /* Tamaño del texto */
    transition: background-color 0.3s ease;
    animation: breathe 2s infinite; /* Animación de respiración */
    z-index: 1000; /* Asegura que el botón esté encima de otros elementos */
}

/* Estilo para el icono de WhatsApp */
.whatsapp-button img {
    width: 30px;
    height: 30px;
    margin-right: 10px; /* Espacio entre el icono y el texto */
}

/* Estilo del texto del botón */
.whatsapp-button span {
    display: inline-block;
}

/* Animación de respiración */
@keyframes breathe {
    0% {
        transform: scale(1);
        background-color: #007a33; /* Verde oscuro */
    }
    50% {
        transform: scale(1.05); /* Aumento de tamaño */
        background-color: #007a33; /* Verde más oscuro */
    }
    100% {
        transform: scale(1);
        background-color: #007a33; /* Verde oscuro */
    }
}

/* Efecto de hover */
.whatsapp-button:hover {
    background-color: #005d26; /* Verde más oscuro para el hover */
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
    align-items: center; /* Asegura que los elementos se alineen verticalmente al centro */
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

@media screen and (max-width: 800px){

    .main__wrapper-presentation{
        min-height: auto;
    }

}

/* ---- END PRESENTATION ---- */




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
                        El perfil del Contador Publico a nivel Mundial a cambiado, de igual manera el Profesional de la Contaduria se encuentra en la necesidad de adquirir nuevas capacidades que le permitan hacer frente a los desafíos que se presentan a diario en su vida laboral y personal.
                        <br> <br>
                        El mundo actual es cambiante, dinamico y Adeconta esta cambiando para lograr que nuestros asociados adquieran nuevas competencias y refuerzas aquellas que ya poseen. La mejora de dichas competencias permitirá que tambien las empresas a las cuales ellos asesoran puedan lograr superar satisfactoriamente los retos actuales que les plantea la globalización de los mercados.
                        </p>
                    </div>
         </div>
         </section> 
    
        <!-- End presentation -->
    
        <!-- Start Service -->
    
        <section>        
    
            <div class="main__wrapper-service">
                    <div class="main__wrapper__service-description">
                        <h2>Nuestros Servicios</h2>
                        <p>  En Adeconta le ofrecemos a nuestros asociados una serie de servicios los cuales en conjunto le permiten al Contador Público responder de mejor manera a los desafíos diarios y obtener una representación significativa de uno de los gremios de Contadores con mayor trayectoria en Colombia en defensa de los intereses de los Profesionales de la Contaduría Publica</p>
                        <div class="button-service-flex"><button type="button" class="main__wrapper__service-description-button">Conoce mas aqui</button></div>
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
                        <p>LA ASOCIACIÓN DE CONTADORES PÚBLICOS DEL VALLE DEL CAUCA, ADECONTA, nace el 06 de noviembre de 1956, dos meses después de la legalización de la Contaduría Pública en Colombia y de la creación de la Junta Central de Contadores. <br> Hoy en día Adeconta continúa ligada al principio que le dio origen: La profesionalización constante de los Contadores Públicos. Un objetivo primario que se desarrolla en los servicios brindados por la Asociación y se preserva en la calidad académica de sus miembros Adeconta hace parte del Comité Nacional Gremial y permanece en contacto permanente con asociaciones de contadores de diferentes regiones del país. <br> Adeconta suma a su experiencia sesenta y ocho años de espíritu renovador, consecuente con los requerimientos actuales de la profesión Contable y su globalización y avances tecnológicos.</p>
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

    <a href="https://dm.wa.link/pw38ky" class="whatsapp-button" target="_blank" aria-label="Contact us on WhatsApp">
            <img src="./img/icon/icons8-whatsapp-50.png" alt="WhatsApp">
            <span>¡Escríbenos!</span>
    </a>

</body>
</html>