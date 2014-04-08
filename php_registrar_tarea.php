<?php

include('conexion.php');

	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$prioridad=$_POST['prioridad'];


	$sql_registrar_tarea="insert into tarea (id,nombre,descripcion,prioridad) 
    VALUES('','$nombre','$descripcion','$prioridad')";
	$conexion=conectar();
	$consulta_registro=mysql_query($sql_registrar_tarea,$conexion) or mysql_error();

	
    if($consulta_registro){
         	echo '<script>alert("Se registro la tarea Correctamente")
 			history.back()
		 			</script>';
         	

        
    }else{
         	echo '<script>alert("No se pudo registrar la tarea")
 			history.back()
		 			</script>';
    }
	



?>