<?php

include('conexion.php');

	$conexion=conectar();
	
	/*listar tareas
	*/
	$sql_listar_tareas="Select * from tarea";
	
	$result=mysql_query($sql_listar_tareas,$conexion) or mysql_error();
	
	
	/* listar lista de tareas asignadas
	*/
	$sql_listar_tareas_asignadas= "SELECT t.nombre, tu.`id`, tu.`fechaasignacion`, tu.`fechaentrega` FROM `tareaUsuario` tu JOIN `tarea` t ON `tarea`=t.`id`";
	
	$resultado= mysql_query($sql_listar_tareas_asignadas,$conexion) or mysql_error();
	

?>


<html>	

	<a><b>Lista de Tareas </b></a>
	<br /><br />
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
	
	<br /><br />
	<a><b>Lista de Tareas Asignadas </b></a>
	<br /><br />
	
	<table border="1" align="center">
					<tr>
						
						<td width="100"><b>Nombre Tarea</b></td>
						<td width="100"><b>Fecha Asignacion</b></td>
						<td width="100"><b>Fecha Entrega</b></td>	
						<td width="100"><b>Editar</b></td>	
						
					</tr>
				
			<?php while($row=mysql_fetch_array($resultado)){ 	?>
				<tr>
				<?php
					$id=$row['id'];
					$nombretarea=$row['nombre'];
					$fechaasignacion=$row['fechaasignacion'];
					$fechaentrega=$row['fechaentrega'];						
				?>	
				
					<td><?php echo $nombretarea; ?></td>
					<td><?php echo $fechaasignacion; ?></td>
					<td><?php echo $fechaentrega; ?></td>
					<td><?php echo "<a href='/mod?id=$id&nombretarea=$nombretarea&fechaasignacion=$fechaasignacion&fechaentrega=$fechaentrega'> Editar</a>";?></td>
					
					
				</tr>
				<?php }?>

	</table>
	

</html>