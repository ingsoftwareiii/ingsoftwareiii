<?php

include('conexion.php');

	$id=$_POST['id'];
	$tarea=$_POST['tarea'];
	$propietario=$_POST['propietario'];
	$responsable=$_POST['responsable'];
	$fechaasignacion=$_POST['fechaasignacion'];
	$fechaentrega=$_POST['fechaentrega'];
	$prioridad=$_POST['prioridad'];
	$estado=$_POST['estado'];
	$descripcion=$_POST['descripcion'];
	


	$sql_asignar_tarea="INSERT INTO `tareaUsuario` (`id`, `tarea`, `propietario`, `responsable`, `fehaasignacion`, `fechaentrega`, `prioridad`, `estado`, `descripcion`) VALUES (NULL,'$tarea','$propietario','$responsable','$fechaasignacion','$fechaentrega','$prioridad','$estado','$descripcion')";
	$conexion=conectar();
	$consulta_registro=mysql_query($sql_asignar_tarea,$conexion) or mysql_error();
	
	echo $sql_asignar_tarea;
	
    if($consulta_registro){
         	echo '<script>alert("Se asigno la tarea Correctamente")
 			history.back()
		 			</script>';
         	

        
    }else{
	
		
         	echo '<script>alert("No se pudo completar la accion'.$sql_asignar_tarea.'")
 			history.back()
		 			</script>';
    }
	



?>