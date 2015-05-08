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
		if($this->db->query($q) === TRUE)
 		{
 			require_once("vistas/juegonuevo.php");
 		}
 		else
 		{
 			$this->db->close();
 		}
	}
	
	public function compararcorreoypass($correo, $pass)
	{
		$this->db = Conectar::conexion();
		$q = "SELECT * FROM usuario WHERE correo = '$correo'";
		$resultado = $this -> db -> query($q);
		if(mysqli_num_rows($resultado))
		{
			$fila = $resultado -> fetch_assoc();
			
			if($fila["pass"] == $pass)
			{
				require_once("vistas/juegonuevo.php");
				echo "Aquí inicia la sesión.";
			}
			else
			{
				echo("Contraseña incorrecta.");
			}
			
			/* liberar el conjunto de resultados */
			mysqli_free_result($resultado);
			$this->db->close();
		}
		else
		{
			echo("Usuario incorrecto");
		}
	}
}
?>