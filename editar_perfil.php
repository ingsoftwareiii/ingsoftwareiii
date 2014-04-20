<?php

include('conexion.php');

		
		$id=$_POST['id'];
		$name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
	
				
		$consulta="UPDATE acr_users SET name='$name', username='$username', email='$email' where id='$id'";
		
		$conexion= conectar();
		
		
		
		$resultado=mysql_query($consulta,$conexion) or mysql_error;
		
		  if($resultado){
         	echo '<script>alert("Se registraron los cambios")
 			history.back()
		 			</script>';
         	
			$_SESSION[__default][user]->name=$name;
			$_SESSION[__default][user]->username=$username;
			$_SESSION[__default][user]->email=$email;
        
			}else{
         	echo '<script>alert("Fallo! No se efectuaron los cambios")
 			history.back()
		 			</script>';
    }
		
		
?>