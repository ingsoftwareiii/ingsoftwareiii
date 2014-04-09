
<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$descripcion=$_GET['descripcion'];
$prioridad=$_GET['prioridad'];


$idm=$_GET['id'];
$descripcionm=$_GET['descripcion'];
$fechaentrega=$_GET['fechaentrega'];
?>

<html>
	
	<body>
            <div style="display: inline-block; float: left; width: 45%">
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
		
		
		
		
	
            <div class="fecha" style="display: inline-block; float: right; width: 45%">
				
				<form action="/code/editar_fecha.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $idm; ?>" />
				
				
				<a><b>Modificar Fecha de Entrega</b></a>
				
				<br /><br />
				<br /><br />
				
				
				<table>
				
				<tr>
				<td><div><label>Nombre:</label></div></td>
				<td><div><input type="text" name="descripcion" value="<?php echo $descripcionm; ?>" /></div></td>
				</tr>
				
				<tr>
				<td><label>Fecha Entrega*</label></td>
				<td> 
				<input type="date" name="fechaentrega" value="<?php echo $fechaentrega; ?>">
				</td>
							
				
				</tr>
				
				
				</table>
                
            </div>
			<div> <input type="submit" value="Cambiar fecha"/></div>
			</form>
			</div>
		
	</body>
	
</html>