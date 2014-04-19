
<?php

include('conexion.php');

	$conexion=conectar();
	
	$id=$_SESSION[__default][user]->id;
	
	
	/*listar tareas de una persona--docente 
	*/
	$sql_consultar_tareas="SELECT t.`nombre`, tu.`descripcion`, tu.`prioridad`, tu.`fechaasignacion`, tu.`fechaentrega`, do.`ruta` FROM `tareaUsuario` tu JOIN `tarea` t ON tu.`tarea`=t.`id` JOIN `documento` do ON do.`tarea`=t.`id`  WHERE tu.`propietario`=$id";
	
	$result=mysql_query($sql_consultar_tareas,$conexion) or mysql_error();
	
?>	



<html>
	<?php echo $sql_consultar_tareas;
	?>
	<a><b>Lista de Tareas pendientes </b></a>
	<br /><br />
	<table border="1" align="center">
					<tr>
						
						<td width="100"><b>Nombre</b></td>
						<td width="100"><b>Descripcion</b></td>
						<td width="100"><b>Prioridad</b></td>	
						<td width="100"><b>Fecha asignacion</b></td>	
						<td width="100"><b>Fecha entrega</b></td>
						<td width="100"><b>Link de documento</b></td>


						
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
					$ruta=$row['ruta'];


					
				?>	
				

					<td><?php echo $nombre; ?></td>
					<td><?php echo $descripcion; ?></td>
					<td><?php echo $prioridad; ?></td>
					<td><?php echo $fechaasignacion; ?></td>
					<td><?php echo $fechaentrega; ?></td>
					<td><?php echo $ruta; ?></td>

					<td><?php echo "<a href='/mod?nombre=$nombre.&id=$id&descripcion=$descripcion&prioridad=$prioridad&ruta=$ruta'> </a>";?></td>
					
					
				</tr>
				<?php }?>

	</table>
	</html>
	