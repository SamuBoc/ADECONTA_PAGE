<?php
	/*== Almacenando datos ==*/
    $category_id_del=limpiar_cadena($_GET['ubication_id_del']);

    /*== Verificando usuario ==*/
    $check_categoria=conexion();
    $check_categoria=$check_categoria->query("SELECT id FROM ubication WHERE id='$category_id_del'");
    
    if($check_categoria->rowCount()==1){

    		$eliminar_categoria=conexion();
	    	$eliminar_categoria=$eliminar_categoria->prepare("DELETE FROM ubication WHERE id=:id");

	    	$eliminar_categoria->execute([":id"=>$category_id_del]);

	    	if($eliminar_categoria->rowCount()==1){
		        echo '
		            <div class="notification is-info is-light">
		                <strong>UBICACION ELIMINADa!</strong><br>
		                Los datos del la ubicacion se eliminaron con exito
		            </div>
		        ';
		    }else{
		        echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrio un error inesperado!</strong><br>
		                No se pudo eliminar la ubicacion, por favor intente nuevamente
		            </div>
		        ';
		    }
		    $eliminar_categoria=null;
    	
    	$check_productos=null;
    }else{
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La UBICACION que intenta eliminar no existe
            </div>
        ';
    }
    $check_categoria=null;