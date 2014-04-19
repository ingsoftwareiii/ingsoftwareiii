
<?php

$id=$_GET['id'];
$nombre=$_GET['name'];
$username=$_GET['username'];
$email=$_GET['email'];

?>


<html>
	
	<body>
            <div style="display: inline-block; float: left; width: 45%">
			<form action="/code/editar_perfil.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
			
			<a><b>Modificar Perfil</b></a>
			
			<table>	
				<tr>
				<td><div><label>Nombre:</label></div></td>
				<td><div><input type="text" name="name" value="<?php echo $nombre; ?>" /></div></td>
				</tr>
				
				<tr>
				<td><div><label>Nombre de usuario:</label></div></td>
				<td><div><input type="text" name="username" value="<?php echo $username; ?>"/></div></td>
				</tr>
			
				<tr>
				<td><div><label>Email:</label></div></td>
				<td><div> <input type="text" name="email" value="<?php echo $email; ?>" /></div></td>
				</tr>
				
				<br /><br />
				<br /><br />
				
			</table>	
				<div> <input type="submit" value="Guardar Cambios"/></div>
			</form>
		</div>
		
		</body>
	</html>