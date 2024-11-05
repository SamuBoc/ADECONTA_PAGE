<style>

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

/* BANNER H2 */

.banner_h2{
    display: flex;
    background-color: #FFFFFF;
    align-items: center;
    justify-content: center;
    height: 90px;
    font-size: calc(1.5vw + 1rem);
    font-weight: 600;
    color: #099018;
}

/* Servicios */

.main__wrapper-services {
    display: grid;
    grid-template-columns: 1fr; /* Una columna para dispositivos móviles */
    gap: 30px; /* Espacio entre las cajas */
    background-color: #099018;
    padding: 20px;
    min-height: auto+420px;
    justify-items: center;
    align-items: center;
}

.main__wrapper__service-boxes {
    display: grid;
    grid-template-columns: 1fr; /* Inicia con una columna para pantallas pequeñas */
    gap: 20px;
    max-height: 370px;
}

/* Estilos de las cajas de servicios */
/* Estilo de la caja madre */
.main__wrapper-services {
    display: grid;
    grid-template-columns: 1fr; /* Una columna en pantallas pequeñas */
    gap: 20px; /* Espaciado entre elementos */
    background-color: #099018;
    padding: 20px;
    min-height: 420px;
    justify-items: center;
    align-items: center;
    margin-bottom: 40px; /* Añadir un margen al final para evitar que las cajas se sobrepongan */
}

.main__wrapper__service-boxes {
    display: grid;
    grid-template-columns: 1fr; /* Una columna en pantallas pequeñas */
    gap: 20px;
    max-height: none;
    height: auto;
}

.main__wrapper__service__boxes-item {
    background-color: #FFFFFF;
    color: #099018;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    min-width: 100px;
    max-width: 250px;
    min-height: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease;
    flex: 1;
    display: flex;
    flex-direction: column;
}

/* Efecto hover */
.main__wrapper__service__boxes-item:hover {
    transform: scale(1.05); /* Efecto de agrandar la caja al pasar el cursor */
}

/* Estilo del título de la sección */
.main__wrapper-services h3 {
    font-size: 17px; /* Aumenta el tamaño dependiendo del tamaño de la pantalla */
    font-weight: 700; /* Mayor peso de la fuente */
    color: #066C12; /* Color del título */
    text-align: center; /* Alineación centrada */
    margin-bottom: 20px; /* Espacio abajo del título */
}

/* Adaptabilidad para pantallas medianas */
@media screen and (min-width: 768px) {
    .main__wrapper__service-boxes {
        grid-template-columns: repeat(2, 1fr); /* Dos columnas en pantallas medianas */
    }
}

/* Adaptabilidad para pantallas grandes */
@media screen and (min-width: 1200px) {
    .main__wrapper__service-boxes {
        grid-template-columns: repeat(4, 1fr); /* Cuatro columnas en pantallas grandes */
    }
}


/* Estilos de la sección de beneficios */
.benefits-section {
    padding: 40px;
    background-color: #FFFFFF;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.benefits-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 1200px;
    width: 100%;
    align-items: center;
}

.benefits-content {
    max-width: 600px;
}

.benefits-content h2 {
    font-size: calc(1.5vw + 1rem);
    color: #099018;
    margin-bottom: 20px;
}

.benefits-content ul {
    list-style: none;
    padding: 0;
}

.benefits-content li {
    display: flex;
    align-items: center;
    font-size: 1em;
    margin-bottom: 15px;
    color: #555;
    text-align: left;
    margin: 50px 0px;
    padding: 2px;
}

.benefits-content li .number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px; /* Tamaño del cuadrado */
    height: 30px; /* Tamaño del cuadrado */
    background-color: #099018; /* Color de fondo */
    color: #fff; /* Color del texto */
    font-weight: bold;
    font-size: 1.2em; /* Tamaño de fuente */
    border-radius: 8px; /* Bordes redondeados */
    margin-right: 18px; /* Espacio entre el número y el texto */
}





.benefits-image img {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilo del botón de contacto */
.contact-button {
    background-color: #099018;
    color: #fff;
    text-decoration: none; /* Quitamos el subrayado */
    padding: 15px 30px;
    font-size: 1.2em;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 30px;
    display: inline-block;
    text-align: center;
    transition: background-color 0.3s ease;
}

.contact-button:hover {
    background-color: #066C12;
}


/* Diseño responsive */
@media (min-width: 768px) {
    .benefits-container {
        flex-direction: row;
        align-items: flex-start;
        gap: 40px;
    }

    .benefits-content, .benefits-image {
        flex: 1;
    }

    .benefits-content {
        text-align: left;
    }
}

@media (min-width: 1200px) {    
    .contact-button {
        font-size: 1.3em;
    }
}

</style>

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

<H2 class="banner_h2">Nuestros servicios</H2>

<!-- SERVICES -->

<section>
    <div class="main__wrapper-services">
    <div class="main__wrapper__service-boxes">
                        <div class="main__wrapper__service__boxes-item">
                            <h3>Mesas Redondas Permanentes</h3>
                            <p> destinadas a brindar espacios 
                                de discusión en bien del intercambio académico en los 
                                diferentes grupos de Chats y también en espacios físicos.</p>
                                
                        </div>
                        <div class="main__wrapper__service__boxes-item">
                            <h3> Actividades de Integración</h3>
                            <p>actividades en las cuales los 
                                contadores tengan un espacio de sano esparcimiento y 
                                descanso, saliendo del agotador día a día en que se ha envuelto 
                                a los profesionales contables en Colombia.</p>
                                
                        </div>
                        <div class="main__wrapper__service__boxes-item">
                            <h3>Boletines informativos</h3>
                            <p>A través de la página web de Adeconta 
                                y también en las Redes sociales en Instagram y en Facebook.
                                </p>
                        </div>
                        <div class="main__wrapper__service__boxes-item">
                            <h3>Seminarios de actualización</h3>
                            <p>Adeconta ofrece una completa 
                                programación anual de seminarios, así como , consecuente con 
                                las transformaciones legislativas abruptas del país , 
                                conferencias de actualización constante.
                                </p>
                        </div>
    
                    </div>
    </div>
</section>

<!-- NUEVA SECCIÓN DE BENEFICIOS -->
<section class="benefits-section">
    <div class="benefits-container">
        <div class="benefits-content">
            <h2>Beneficios de nuestros socios</h2>
            <ul>
                <li>
                    <span class="number">1</span>
                    Descuentos significativos en las distintas actividades de actualización programadas por la asociación.
                </li>
                <li>
                    <span class="number">2</span>
                    Bolsa de empleos, las solicitudes enviadas por las empresas en busca de profesionales acreditados por ADECONTA son estudiadas por la asociación, que seleccionará al candidato entre los asociados interesados.
                </li>
                <li>
                    <span class="number">3</span>
                    El servicio de consultoría, el comité académico de la Asociación, tiene entre sus funciones la de atender permanentemente las dudas profesionales de sus asociados sobre casos específicos.
                </li>
                <li>
                    <span class="number">4</span>
                    Derecho a elegir y ser elegido en los cargos representativos de la asociación.
                </li>
            </ul>
        </div>
        <div class="benefits-image">
            <img src="./img/image 55.png" alt="Personas saludándose en una reunión de negocios">
        </div>
    </div>
    <a href="https://dm.wa.link/pw38ky" target="_blank" class="contact-button">Contáctanos</a>

</section>