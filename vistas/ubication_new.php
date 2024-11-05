<div class="container is-fluid mb-6">
	<h1 class="title">Ubicaciones</h1>
	<h2 class="subtitle">Nueva ubicacion</h2>
</div>

<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/ubicacion_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
        <div class="column">
		    	<div class="control">
					<label>Nombres</label>
				  	<input class="input" type="text" name="name" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9]{0,100}" maxlength="40" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Direccion</label>
				  	<input class="input" type="text" name="address" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s0-9]{0,100}" maxlength="100" required >
				</div>
		  	</div>	
		</div>
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>