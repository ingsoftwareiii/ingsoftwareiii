
<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$descripcion=$_GET['descripcion'];
$prioridad=$_GET['prioridad'];
?>

<html>
	
	<body>
		<div>
			<form action="/code/editar_tarea.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
			
			<a><b>Modificar Tarea</b></a>
			
			<table>	
				<tr>
				<td><div><label>Nombre:</label></div></td>
				<td><div><input type="text" name="nombre" value="<?php echo $nombre; ?>" /></div></td>
				</tr>
				
				<tr>
				<td><div><label>Prioridad:</label></div></td>
				<td><div><input type="text" name="prioridad" value="<?php echo $prioridad; ?>"/></div></td>
				</tr>
				
				
				
				
				<tr>
				<td><div><label>Descripcion:</label></div></td>
				<td><div> <textarea rows="4" cols="50" name="descripcion"> <?php echo $descripcion; ?> </textarea></div></td>
				</tr>
				
				<br /><br />
				<br /><br />
				
			</table>	
				<div> <input type="submit" value="Guardar Cambios"/></div>
			</form>
		</div>
	</body>
	
</html>