<?php
class clsDatos
{
	private $conexion;


	public function __construct()
	{
		$servidor = "localhost";
		$usurio = "root";
		$clave = "asd123";
		$base = "scorer";

		$this->conexion = mysql_connect($servidor, $usuario, $clave);
		mysql_select_db($base, $this->conexion);

	}

	public function __destruct()
	{

	}

	public function filtro($sql)
	{
		$result = mysql_query($sql, $this->conexion);
		return $result;
	}

	public function cerrarfiltro($datos)
	{
		mysql_free_result($datos);
	}
}
?>