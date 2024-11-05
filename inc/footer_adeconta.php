<style>
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
</style>


<!-- Include Footer -->
        
        <!-- CODE HTML FOOTER -->

        <footer class="main__wrapper-footer">
            <div class="main__wrapper__footer-box">
                <div class="main__wrapper__footer-menu">
                    <ul class="main__wrapper__footer-ul">
                        <li class="main__wrapper__footer__ul-li"><a href="#">Menu</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=servicios">Servicios</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=publicaciones">Publicaciones</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=eventos">Eventos</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=nosotros">Nosotros</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=contacto">Contacto</a></li>
                        <li class="main__wrapper__footer__ul-li"><a href="index.php?vista=login">Ingresar</a></li>
                    </ul>
                </div>
                <div class="main__wrapper__footer-social">
                    <ul class="main__wrapper__footer__social-ul">
                        <li class="main__wrapper__footer__social__ul-li">
                            <a href="https://dm.wa.link/pw38ky" target="_blank">
                                <img src="./img/icon/icons8-whatsapp-50.png">
                            </a>
                        </li>
                        <li class="main__wrapper__footer__social__ul-li">
                            <a href="https://www.facebook.com/profile.php?id=100064757749081" target="_blank">
                                <img src="./img/icon/facebook_icon.png">
                            </a>
                        </li>
                        <li class="main__wrapper__footer__social__ul-li">
                            <a href="https://www.instagram.com/adeconta_org/" target="_blank">
                                <img src="./img/icon/instagram_icon.png">
                            </a>
                        </li>
                        <li class="main__wrapper__footer__social__ul-li">
                            <a href="https://www.linkedin.com/in/adeconta-asociaci%C3%B3n-de-contadores-publicos-del-valle-del-cauca-1018b4323/" target="_blank">
                                <img src="./img/icon/icons8-linkedin.svg">
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="main__wrapper__footer-divider">
                
            </div>
            <div class="main__wrapper__footer-copyright">
                <p>© 2024 Adeconta</p>
            </div>
            
        </footer>