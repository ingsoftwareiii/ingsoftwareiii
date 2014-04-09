<?php

include('conexion.php');

	$conexion=conectar();
	
	
	$id=$_POST['id'];
	$tarea=$_POST['tarea'];
	

/* Lista todas las tareas en la base de datos
	*/
	$sql_listar_tareas="Select id, nombre from tarea";
	$result=mysql_query($sql_listar_tareas,$conexion) or mysql_error();
	
	while($row=mysql_fetch_array($result))
	{
		$id=$row['id'];
		$nombre=$row['nombre'];
		$options_nombre.='<option value="'.$id.'">'.$nombre.'</option>';
	}
	
?>



<div id="formulario">
<form action="/code/php_crear_documento.php"  method="post">
    <a><b>Ingrese todos los datos</b></a><br /><br />
    <table>
        <tr>    
            <td><label>Tarea*</label></td>
            <td> 
				<select id="tarea" name="tarea" required="required">
					<?php echo $options_nombre; ?>
				</select>
			</td>
        </tr>

        
		
	<tr>    
            <td><label>Nombre del documento*</label></td>
            <td> <input type="text" name="nombre" required="required"/></td>
        </tr>
        
	<tr>    
            <td><label>Ruta*</label></td>
            <td> <input type="text" name="ruta" required="required"/> </td>
        </tr>



    </table>
 <button type="submit">Asignar documento</button>
</form>
</div>