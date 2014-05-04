<?php

include('conexion.php');

        $tarea=$_POST['tarea'];
        $nombre=$_POST['nombre'];
        $ruta=$_POST['ruta'];

       $sql_crear_documento="INSERT INTO `documento` (`id`, `tarea`, `nombre`, `ruta`) VALUES (NULL, '$tarea', '$nombre', '$ruta')";
       $conexion=conectar();
       $consulta_registro=mysql_query($sql_crear_documento,$conexion) or mysql_error();

	
              if($consulta_registro){
                     echo '<script>alert("Se agrego el documento Correctamente")
                     history.back()
                     </script>';
         	}else{
                echo '<script>alert("No se pudo agregar el documento a la tarea")
                history.back()
                </script>';
                }
?>
