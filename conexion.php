<?php

function conectar(){
    	
		$server="localhost";
		$user="root";
		$password="mysql";
		$nameDataBase="acreditacion";
  		$conexion=mysql_connect($server,$user,$password);
        mysql_select_db($nameDataBase,$conexion);
        return $conexion;
	}


	function getQuery($consulta)
	{
		$query=mysql_query($consulta);
		$resultado=mysql_fetch_array($query);
		return $resultado;
	}

	function getConsulta($consulta){
		$query=mysql_query($consulta);
		return $query;
	}
	function getInsert($consulta,$conexion)
	{
		if(mysql_query($consulta,$conexion)or die(mysql_error())){
			return true;
		}
		else {
			return false;
		}
	}

	function getUpdate($consulta,$conexion)
	{
		if(mysql_query($consulta,$conexion)or die(mysql_error())){
			return true;
		}
		else {
			return false;
		}
	}

	function getDelete($consulta,$conexion)
	{
		if(mysql_query($consulta,$conexion)or die(mysql_error())){
			return true;
		}
		else {
			return false;
		}
	}


?>

