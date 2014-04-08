<?php

include('conexion.php');

		$id=$_POST['id'];
		$nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $prioridad=$_POST['prioridad'];	
	
				
		$consulta="UPDATE tarea SET nombre='$nombre', descripcion='$descripcion', prioridad='$prioridad' where id='$id'";
		
		$conexion= conectar();
		
		$resultado=mysql_query($consulta,$conexion) or mysql_error;
		
		  if($resultado){
         	echo '<script>alert("Se registraron los cambios")
 			history.back()
		 			</script>';
         	

        
			}else{
         	echo '<script>alert("Fallo! No se realizaron cambios")
 			history.back()
		 			</script>';
    }
		
		
?>
