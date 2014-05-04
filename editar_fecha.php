<?php

include('conexion.php');

        $id=$_POST['id'];
        $descripcion=$_POST['descripcion'];
        $fechaasignacion=$_POST['fechaasignacion'];
        $fechaentrega=$_POST['fechaentrega'];	
	
        $consulta="UPDATE tareaUsuario SET fechaentrega='$fechaentrega' where id='$id'";
	$conexion= conectar();
	$resultado=mysql_query($consulta,$conexion) or mysql_error;
		
		
       if($resultado){
       echo '<script>alert("Se realizaron los cambios")
              history.back()
              </script>';
         	
       }else{
             echo '<script>alert("Fallo! No se realizaron cambios")
             history.back()
             </script>';
       }
?>
