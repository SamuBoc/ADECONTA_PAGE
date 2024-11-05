<div class="container is-fluid mb-6">
	<h1 class="title">Ponente</h1>
	<h2 class="subtitle">Nuevo Ponente</h2>
</div>

<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/ponente_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
        <div class="column">
		    	<div class="control">
					<label>Nombres</label>
				  	<input class="input" type="text" name="name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Apellidos</label>
				  	<input class="input" type="text" name="last_name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required >
				</div>
		  	</div>
		</div>
        <div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="description" pattern="[\p{L}\p{N}\s.,()\-]{3,400}" maxlength="400" required >
				</div>
		  	</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>