<?php
	/*== Almacenando datos ==*/
    $category_id_del=limpiar_cadena($_GET['speaker_id_del']);

    /*== Verificando usuario ==*/
    $check_categoria=conexion();
    $check_categoria=$check_categoria->query("SELECT id FROM speakers WHERE id='$category_id_del'");
    
    if($check_categoria->rowCount()==1){

    		$eliminar_categoria=conexion();
	    	$eliminar_categoria=$eliminar_categoria->prepare("DELETE FROM speakers WHERE id=:id");

	    	$eliminar_categoria->execute([":id"=>$category_id_del]);

	    	if($eliminar_categoria->rowCount()==1){
		        echo '
		            <div class="notification is-info is-light">
		                <strong>PONENTE ELIMINADO!</strong><br>
		                Los datos del ponente se eliminaron con exito
		            </div>
		        ';
		    }else{
		        echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrio un error inesperado!</strong><br>
		                No se pudo eliminar el ponente, por favor intente nuevamente
		            </div>
		        ';
		    }
		    $eliminar_categoria=null;
    	
    	$check_productos=null;
    }else{
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La PLATAFORMA que intenta eliminar no existe
            </div>
        ';
    }
    $check_categoria=null;