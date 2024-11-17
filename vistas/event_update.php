<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container is-fluid mb-6">
    <h1 class="title">Evento</h1>
    <h2 class="subtitle">Actualizar evento</h2>
</div>

<div class="container pb-6 pt-6">
    <?php require_once "./php/main.php"; ?>

    <div class="form-rest mb-6 mt-6"></div>

    <!-- Recoleccion de datos -->
    <?php
    // Asegurarnos de que el ID sea un número entero y evitar inyecciones SQL
    $id = (int) $_GET['event_id_up'];

    // Conectamos a la base de datos
    $conexion = conexion();

    // Usamos una consulta preparada para evitar inyecciones SQL
    $query_all = "SELECT * FROM events WHERE id = :id";

    // Preparamos la consulta
    $stmt = $conexion->prepare($query_all);

    // Ejecutamos la consulta pasando el valor de id
    $stmt->execute(['id' => $id]);

    // Obtenemos todos los resultados
    $event_data = $stmt->fetch();
    ?>

    <form action="./php/evento_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off"
        enctype="multipart/form-data">
        <input type="hidden" name="event_id_up" id="event_id_up" value="<?php echo $_GET['event_id_up']; ?>" />

        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Nombre</label>
                    <input class="input" type="text" name="name" id="event_name" pattern="{3,40}"
                        maxlength="40" placeholder="Ingrese el nombre del evento" value="<?php echo $event_data['name']; ?>"
                        required>
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Tipo</label>
                    <input class="input" type="text" name="type" id="event_type" pattern="{0,100}"
                        maxlength="100" placeholder="Ingrese el tipo de evento (ej: conferencia, taller)" value="<?php echo $event_data['type']; ?>" required>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Link</label>
                    <input class="input" type="text" name="link" id="event_link"
                        maxlength="100"
                        placeholder="Enlace para la inscripcion del evento" value="<?php echo $event_data['link']; ?>">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Costo Afiliados</label>
                    <input class="input" type="text" name="cost_sub" id="event_cost_sub" pattern="[0-9.]{0,25}"
                        maxlength="9" placeholder="Ingrese el costo para afiliados (ej:60000)" value="<?php echo $event_data['cost_sub']; ?>">
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Costo Normal</label>
                    <input class="input" type="text" name="cost_initial" id="event_cost_initial" pattern="[0-9.]{0,25}"
                        maxlength="9" placeholder="Ingrese el costo normal (ej:60000)" value="<?php echo $event_data['cost_initial']; ?>">
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-narrow">
                <div class="field">
                    <label>Hora de inicio</label>
                    <div class="control">
                        <input class="input" type="time" name="start_time" id="event_start_time" value="<?php echo $event_data['start_time']; ?>"required>
                    </div>
                </div>
            </div>
            <div class="column is-narrow">
                <div class="field">
                    <label>Hora de Finalización</label>
                    <div class="control">
                        <input class="input" type="time" name="end_time" id="event_end_time" value="<?php echo $event_data['end_time']; ?>">
                    </div>
                </div>
            </div>
            <div class="column is-narrow">
                <div class="field">
                    <label>Fecha</label>
                    <div class="control">
                        <input class="input" type="date" name="timestamp" id="event_date" value="<?php echo $event_data['date_initial']; ?>" required>
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
                                <option>Seleccion</option>
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
            <div class="column is is-narrow">
                <div class="field">
                    <label>Afiche</label>
                    <div class="control">
                        <div class="file is-small has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="poster_file" accept=".jpg, .png, .jpeg">
                                <span class="file-cta">
                                    <span class="file-label">Imagen</span>
                                </span>
                                <span class="file-name"><?php if(is_null($event_data['photo'])){echo "JPG, JPEG, PNG. (MAX 3MB)";}else{echo $event_data['photo'];}?></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
			<div class="column">
				<div class="control">
				<label>Descripcion</label>
				<input class="input" type="text" name="description" pattern="{0,120}" maxlength="120" placeholder="Ingrese la descripcion del evento" >
				</div>
			</div>
			</div>

        <p class="has-text-centered">
            <button type="submit" class="button is-info is-rounded">Actualizar</button>
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