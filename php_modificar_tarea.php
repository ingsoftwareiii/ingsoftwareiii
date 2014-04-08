<?php

include_once('conexion.php');

		$id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $descripcion=$_GET['descripcion'];
        $prioridad=$_GET['prioridad'];	
	
		
		$conexion= getConexion();
		
		$consulta="update tarea set nombre='".$nombre"', descripcion='".$descripcion"' where id='$id'";
		$resultado=mysql_query($consulta,$conexion);
		
		echo "<script> alert('Se ejecuto la consulta'); </script>";
		
		
		
		
?>
