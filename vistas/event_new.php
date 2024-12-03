<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<div class="container is-fluid mb-6">
	<h1 class="title">Evento</h1>
	<h2 class="subtitle">Nuevo evento</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
	require_once "./php/main.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/evento_guardar.php" method="POST" class="FormularioAjax" autocomplete="off"
		enctype="multipart/form-data">
		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Nombre</label>
					<input class="input" type="text" name="name" maxlength="40"
						placeholder="Ingrese el nombre del evento" required>
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Tipo</label>
					<input class="input" type="text" name="type" maxlength="100"
						placeholder="Ingrese el tipo de evento (ej: conferencia, taller)" required>
				</div>
			</div>
		</div>

		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Link</label>
					<input class="input" type="text" name="link" maxlength="100"
						placeholder="Enlace para la inscripcion del evento">
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Costo Afiliados</label>
					<input class="input" type="text" name="cost_sub" pattern="[0-9.]{0,25}" maxlength="9"
						placeholder="Ingrese el costo para afiliados (ej:60000)">
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Costo Normal</label>
					<input class="input" type="text" name="cost_initial" pattern="[0-9.]{0,25}" maxlength="9"
						placeholder="Ingrese el costo normal (ej:60000)">
				</div>
			</div>
		</div>

		<div class="columns">
			<div class="column is-narrow">
				<div class="field">
					<label>Hora de inicio</label>
					<div class="control">
						<input class="input" type="time" name="start_time" required>
					</div>
				</div>
			</div>
			<div class="column is-narrow">
				<div class="field">
					<label>Hora de Finalización</label>
					<div class="control">
						<input class="input" type="time" name="end_time">
					</div>
				</div>
			</div>
			<div class="column is-narrow">
				<div class="field">
					<label>Fecha</label>
					<div class="control">
						<input class="input" type="date" name="timestamp" required>
					</div>
				</div>
			</div>
			<div class="column is-narrow">
				<div class="field">
					<label>Modalidad</label>
					<div class="control" name="modality">
						<label class="radio">
							<input type="radio" name="modality" value="presencial"> Presencial
						</label>
						<label class="radio">
							<input type="radio" name="modality" value="virtual"> Virtual
						</label>
					</div>
				</div>
			</div>
			<div class="column is-one-quarter">
				<div class="field is-half">
					<label>Direccion/Plataforma</label>
					<div class="control">
						<div class="select is-fullwidth">
							<select id="dynamic-select" name="selected_option">
								<option value="">Seleccion</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="field is-half">
					<label>Ponentes</label>
					<div class="control">
						<select id="speaker-select" name="speaker_option[]" multiple="multiple" style="width: 100%;">
							<!-- Opciones cargadas dinámicamente -->
						</select>
					</div>
				</div>
			</div>


		</div>

		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Descripcion</label>
					<input class="input" type="text" name="description" pattern="{0,120}" maxlength="120"
						placeholder="Ingrese la descripcion del evento">
				</div>
			</div>
		</div>



		<div class="columns">
			<div class="column is is-narrow">
				<div class="field">
					<label>Afiche</label>
					<div class="control">
						<div class="file is-small has-name">
							<label class="file-label">
								<input class="file-input" type="file" name="poster_file"
									accept=".jpg, .png, .jpeg, .webp">
								<span class="file-cta">
									<span class="file-label">Imagen</span>
								</span>
								<span class="file-name">JPG, JPEG, WEBP,PNG. (MAX 3MB)</span>
							</label>
						</div>
					</div>

				</div>
				<div class="field">
					<label>Destacado</label>
					<div class="control">
						<label class="radio">
							<input type="radio" name="view" value="1"> Sí
						</label>
						<label class="radio">
							<input type="radio" name="view" value="0" checked> No
						</label>
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
	$(document).ready(function () {
		// Inicializar Select2
		$('#speaker-select').select2({
			placeholder: "Selecciona ponentes",
			allowClear: true
		});

		// Cargar opciones de los ponentes
		$.ajax({
			url: './php/load_speakers.php',
			type: 'POST',
			success: function (response) {
				if (response) {
					$('#speaker-select').html(response); // Cargar opciones en Select2
				} else {
					alert("Error al cargar los ponentes.");
				}
			},
			error: function () {
				alert("Error en la solicitud AJAX.");
			}
		});

		// Cargar opciones de Dirección/Plataforma según modalidad
		$('input[name="modality"]').on('change', function () {
			var modality = $(this).val();
			$.ajax({
				url: './php/load_options.php',
				type: 'POST',
				data: { modality: modality },
				success: function (response) {
					$('#dynamic-select').html(response);
				},
				error: function () {
					alert("Error al cargar opciones de Dirección/Plataforma.");
				}
			});
		});
	});
</script>