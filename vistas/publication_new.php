<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<style>
    /* Estilo para el editor Quill */
	#editor {
    width: 100%; /* Ocupa todo el ancho disponible */
    min-height: 300px; /* Establece una altura mínima */
    resize: none; /* Deshabilita la capacidad de redimensionar */
    padding: 10px; /* Agrega algo de espacio interno */
    border: 1px solid #ccc; /* Un borde ligero */
    font-size: 16px; /* Establece el tamaño de la fuente */
  }

  
</style>

<div class="container is-fluid mb-6">
  <h1 class="title">Publicacion</h1>
  <h2 class="subtitle">Nueva publicacion</h2>
</div>

<div class="container pb-6 pt-6">
  <?php
    require_once "./php/main.php";
  ?>

  <div class="form-rest mb-6 mt-6"></div>

  <form action="./php/publicacion_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
    <div class="columns">
      <div class="column">
        <div class="control">
          <label>Titulo</label>
          <input class="input" type="text" name="tittle" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9.]{4,40}" maxlength="40" placeholder="Ingrese el titulo de la publicacion" required >
        </div>
      </div>

      <div class="column">
        <div class="control">
          <label>Descripcion</label>
          <input class="input" type="text" name="description" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9.]{4,80}" maxlength="80" placeholder="Ingrese una breve descripcion del articulo" required >
        </div>
      </div>
      <div class="column">
        <div class="field is-half">
          <label>Ponentes</label>
          <div class="control">
            <select id="speaker-select" name="speaker_option" style="width: 100%;">
              <!-- Opciones cargadas dinámicamente -->
            </select>
          </div>
        </div>
      </div>
    </div>

	<div class="columns">
                <div class="column">
                    <label for="editor">Contenido</label>
                    <!-- Esta es el área donde se utiliza el editor TinyMCE -->
                    <textarea id="editor" name="article"></textarea>
                </div>
            </div>

	<div class="columns">
				<div class="column is is-narrow">
						<div class="field">
							<label>Portada</label>
							<div class="control">
							<div class="file is-small has-name">
								<label class="file-label">
									<input class="file-input" type="file" name="poster_file" accept=".jpg, .png, .jpeg, .webp" >
									<span class="file-cta">
										<span class="file-label">Imagen</span>
									</span>
									<span class="file-name">JPG, JPEG, WEBP,PNG. (MAX 3MB)</span>
								</label>
							</div>
						</div>
						
					</div>
				</div>
			</div>

    <p class="has-text-centered">
      <button type="submit" class="button is-info is-rounded">Guardar</button>
    </p>
  </form>
</div>

<script>
  $(document).ready(function() {
    // Inicializar Select2
    $('#speaker-select').select2({
      placeholder: "Selecciona ponentes",
      allowClear: true
    });

    // Cargar opciones de los ponentes
    $.ajax({
      url: './php/load_speakers.php',
      type: 'POST',
      success: function(response) {
        if (response) {
          $('#speaker-select').html(response); // Cargar opciones en Select2
        } else {
          alert("Error al cargar los ponentes.");
        }
      },
      error: function() {
        alert("Error en la solicitud AJAX.");
      }
    });

    // Limitar la selección a solo uno (opcional)
    $('#speaker-select').on('select2:select', function(e) {
      // Si el usuario selecciona una opción, deshabilitar la capacidad de seleccionar más
      if ($(this).val().length > 1) {
        $(this).val($(this).val().slice(0, 1)).trigger('change');
      }
    });

    
		// Inicializar el editor TinyMCE
		tinymce.init({
            selector: '#editor',  // Aplica TinyMCE al textarea con id "editor"
            menubar: false,        // Deshabilita la barra de menú
            toolbar: 'bold italic underline | formatselect | bullist numlist | link image',  // Botones disponibles en la barra de herramientas
            plugins: 'link image', // Activa los plugins para insertar enlaces e imágenes
            setup: function (editor) {
                // Cuando el contenido cambia, se guarda automáticamente en el textarea
                editor.on('change', function () {
                    editor.save(); // Guarda el contenido como HTML
                });
            }
        });

    // Aquí es donde pones el nuevo código
    $('form').submit(function() {
      var contenido = quill.root.innerHTML;
      $('#article').val(contenido); // Guardamos el contenido del editor en el campo oculto
      console.log(contenido); // Solo para verificar en la consola
    });
  });
</script>
