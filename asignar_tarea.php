<?php

include('conexion.php');

       $conexion=conectar();
	
       $id=$_POST['id'];
       $tarea=$_POST['tarea'];
       $propietario=$_POST['propietario'];
       $responsable=$_POST['responsable'];
       $fechaasignacion=$_POST['fechaasignacion'];
       $fechaentrega=$_POST['fechaentrega'];
       $prioridad=$_POST['prioridad'];
       $estado=$_POST['estado'];
       $descripcion=$_POST['descripcion'];
	
	
	
	
       /* Lista todas las tareas en la base de datos
       */
        $sql_listar_tareas="Select id, nombre from tarea";
        $result=mysql_query($sql_listar_tareas,$conexion) or mysql_error();
	
        while($row=mysql_fetch_array($result)){
        $id=$row['id'];
        $nombre=$row['nombre'];
        $options_nombre.='<option value="'.$id.'">'.$nombre.'</option>';
         }
	
        /* para propietario y responsable
        */
        $sql_propietario="Select id, name from acr_users";
        $resultpropi=mysql_query($sql_propietario,$conexion) or mysql_error();

        while($row=mysql_fetch_array($resultpropi)){
        $id=$row['id'];
        $name=$row['name'];
        $options_name.='<option value="'.$id.'">'.$name.'</option>';
	}
	
	?>
<div id="formulario">
<form action="/code/php_asignar_tarea.php"  method="post">
    <a><b>Ingrese todos los datos de la asignacion</b></a><br /><br />
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
                <td><label>Propietario*</label></td>
                <td> 
                   <select id="propietario" name="propietario" required="required">
                       <?php echo $options_name; ?>
                   </select>
                </td>
           </tr>
		
            <tr>    
            <td><label>Responsable*</label></td>
            <td> 
                 <select id="responsable" name="responsable" required="required">
                          <?php echo $options_name; ?>
                 </select>
            </td>
            </tr>
		
	 
                <tr>
                <td><label>Fecha Asignacion*</label></td>
                   <td> 
                     <input type="date" name="fechaasignacion">
			
                   </td>
               </tr>
	 
	 
                <tr>
                    <td><label>Fecha Entrega*</label></td>
                    <td> 
                    <input type="date" name="fechaentrega">
                    </td>
               </tr>
	 
	 
                <tr>
                     <td><label>Prioridad*</label></td>
                     <td> <Select name="prioridad">
				<OPTION VALUE="alta">Alta</OPTION>
				<OPTION VALUE="media">Media</OPTION>
				<OPTION VALUE="baja">Baja</OPTION>
			</select>
			</td>
		</tr>
        
		
		<tr>
			<td><label>Estado*</label></td>
			<td> <Select name="estado">
                                <OPTION VALUE="-">-</OPTION>
                                <OPTION VALUE="iniciada">Iniciada</OPTION>
                                <OPTION VALUE="terminada">Terminada</OPTION>
                        </select>
			</td>
	       </tr>
             
             <tr>    
             <td><label>Descripcion*</label></td>
             <td> <textarea rows="4" cols="50" name="descripcion"required="required"> </textarea> </td>
             </tr>



     </table>
 <button type="submit">Asignar</button>
</form>
</div>
