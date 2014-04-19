
<?php

include('../conexion.php');

	$conexion=conectar();
	
	/*listar tareas de una persona--docente 
	*/
	$sql_consultar_tareas="Select * from tarea";
	
	$result=mysql_query($sql_consultar_tareas,$conexion) or mysql_error();
	
?>	



<html>	

	<a><b>Lista de Tareas </b></a>
	<br /><br />
	<table border="1" align="center">
					<tr>
						
						<td width="100"><b>Nombre</b></td>
						<td width="100"><b>Descripcion</b></td>
						<td width="100"><b>Prioridad</b></td>	
						<td width="100"><b>Fecha asignacion</b></td>	
						<td width="100"><b>Fecha entrega</b></td>	

						
					</tr>
				
			<?php while($row=mysql_fetch_array($result)){ 	?>
				<tr>
				<?php
					$id=$row['id'];
					$nombre=$row['nombre'];
					$descripcion=$row['descripcion'];
					$prioridad=$row['prioridad'];
					$fechaasignacion=$row['fechaasignacion'];
					$fechaentrega=$row['fechaentrega'];

					
				?>	
				

					<td><?php echo $nombre; ?></td>
					<td><?php echo $descripcion; ?></td>
					<td><?php echo $prioridad; ?></td>
					<td><?php echo "<a href='/mod?nombre=$nombre.&id=$id&descripcion=$descripcion&prioridad=$prioridad'> Editar</a>";?></td>
					
					
				</tr>
				<?php }?>

	</table>
	</html>
	