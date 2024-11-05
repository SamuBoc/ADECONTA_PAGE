<div class="container is-fluid mb-6">
	<h1 class="title">Ponente</h1>
	<h2 class="subtitle">Actualizar ponente</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['ubication_id_up'])) ? $_GET['ubication_id_up'] : 0;
		$id=limpiar_cadena($id);

		/*== Verificando categoria ==*/
    	$check_categoria=conexion();
    	$check_categoria=$check_categoria->query("SELECT * FROM ubication WHERE id='$id'");

        if($check_categoria->rowCount()>0){
        	$datos=$check_categoria->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/ubicacion_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="ubicacion_id" value="<?php echo $datos['id']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="ubicacion_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required value="<?php echo $datos['name']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Direccion</label>
				  	<input class="input" type="text" name="ubicacion_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{0,100}" maxlength="100" required value="<?php echo $datos['address']; ?>" >
				</div>
		  	</div>
		</div>
				
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_categoria=null;
	?>
</div>