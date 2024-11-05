<style>

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
}</style>

<a href="https://dm.wa.link/pw38ky" class="whatsapp-button" target="_blank" aria-label="Contact us on WhatsApp">
            <img src="./img/icon/icons8-whatsapp-50.png" alt="WhatsApp">
            <span>¡Escríbenos!</span>
    </a>