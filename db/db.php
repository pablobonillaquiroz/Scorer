<?php
class Conectar
{
	public static function conexion()
 	{
 		/*
 			Parámetros de mysqli
 			mysqli("server", "usuario", "pass", "bd");
 		*/
 		$conexion=new mysqli("localhost", "root", "asd123", "scorer");
 		$conexion->query("SET NAMES 'utf8'");
 		return $conexion;
 	}
 }
?>