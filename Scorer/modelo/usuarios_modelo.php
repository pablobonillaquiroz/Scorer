<?php

class usuarios_modelo
{
	private $db;

	public function __construct()
	{
		$this->db = Conectar::conexion();
	}

	/*public function get_personas()
	{
		$consulta=$this->db->query("select * from personas;");

		while($filas=$consulta->fetch_assoc())
		{
			$this->personas[]=$filas;
		}
		return $this->personas;
	}*/

	public function nuevousuario($correo, $pass)
	{
		$q = "INSERT into usuario values(null,'$correo','$pass');";
		echo $q;
		if($this->db->query($q) === TRUE)
 		{
 			require_once("vistas/juegonuevo.php");
 		}
 		else
 		{
 			$this->db->close();
 		}
	}
}
?>