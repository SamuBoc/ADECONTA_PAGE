<style>
    /* ----- CONTACT SECTION ------ */

    .main__wrapper-contact {
        display: flex;
        flex-direction: column; /* Alinea los elementos en una columna */
        align-items: center; /* Centra los elementos horizontalmente */
        justify-content: center; /* Centra los elementos verticalmente */
        max-width: 100vw;
        height: 100vh;
        padding: 4rem 1rem 7rem 1rem;
        background-color: #f5f5f5;
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
    .main__wrapper-contact textarea {
        width: 100%;
        margin: 10px 0; /* Ajusta el margen para los inputs y botón */
        padding: 25px;
        box-sizing: border-box; /* Asegura que el padding no afecte el tamaño total */
        border-radius: 10px;
        background-color: #D9D9D947;
        border: none;
        color: #099018;
        font-size: 1rem;
    }

    .main__wrapper-contact textarea {
        resize: none;
        padding: 14px;
        font-family: 'Montserrat', sans-serif;
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
        padding: 12px 25px;
        font-size: 1.1rem;
    }

    .main__wrapper-contact button:hover {
        background-color: #087f12; /* Color de hover para el botón */
    }

    .main__wrapper-contact h2 {
        margin-bottom: 20px; /* Espacio entre el título y los inputs */
        color: #099018;
        font-size: 6.5vh;
        font-weight: 700;
        text-align: center;
    }

    /* ----- END CONTACT SECTION ------ */

</style>

<!-- Página de Contacto -->
<div class="main__wrapper-contact">
    <h2>Contactanos</h2>
    <div class="main__wrapper__contact-inputs">
        <input type="text" placeholder="Nombre" required>
        <input type="email" placeholder="Correo" required>
        <textarea placeholder="Mensaje" required></textarea>
        <button type="submit">Enviar</button>
    </div>
</div>
