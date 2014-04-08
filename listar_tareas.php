<?php

include('conexion.php');

	$conexion=conectar();
	$sql_listar_tareas="Select * from tarea";
	
	$result=mysql_query($sql_listar_tareas,$conexion) or mysql_error();
	
?>


<html>	
	<table border="1" align="center">
					<tr>
						
						<td width="100"><b>Nombre</b></td>
						<td width="100"><b>Descripcion</b></td>
						<td width="100"><b>Prioridad</b></td>	
						<td width="100"><b>Editar</b></td>	
						
					</tr>
				
			<?php while($row=mysql_fetch_array($result)){ 	?>
				<tr>
				<?php
					$id=$row['id'];
					$nombre=$row['nombre'];
					$descripcion=$row['descripcion'];
					$prioridad=$row['prioridad'];						
				?>	
				

					<td><?php echo $nombre; ?></td>
					<td><?php echo $descripcion; ?></td>
					<td><?php echo $prioridad; ?></td>
					<td><?php echo "<a href='/mod?nombre=$nombre.&id=$id&descripcion=$descripcion&prioridad=$prioridad'> Editar</a>";?></td>
					
					
				</tr>
				<?php }?>

	</table>
</html>