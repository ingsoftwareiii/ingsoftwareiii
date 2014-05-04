<div id="formulario">
<form action="/code/php_registrar_tarea.php"  method="post">
    <a><b>Ingrese todos los datos de la tarea</b></a><br /><br />
    <table>
        <tr>    
            <td><label>Nombre de la tarea*</label></td>
            <td> <input type="text" name="nombre" required="required"/></td>
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
            <td><label>Descripcion*</label></td>
            <td> <textarea rows="4" cols="50" name="descripcion"required="required"> </textarea> </td>
        </tr>



     </table>
     <button type="submit">Registrar</button>
</form>
</div>
