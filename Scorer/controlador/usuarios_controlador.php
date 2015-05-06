<?php
	//Llamada al modelo

class Usuario
{
	private $modelo;

	public function ejecutar()
	{
		require_once("modelo/usuarios_modelo.php");
		$this->modelo=new usuarios_modelo();
		switch ($_GET['accion'])
		{
			case "alta":
			if(empty($_POST))
			{
				require_once("vistas/login.php");
			}
			else
			{
				if(isset($_POST["correo"]))
					$correo = $_POST["correo"];
				if (isset($_POST["pass1"])){
					$pass1   = $_POST["pass1"];
				}
				else
					require_once("vistas/404.html")


				$resultado = $this -> modelo -> nuevousuario($correo, $pass1);

				if($resultado !== FALSE)
				{
					require_once("vistas/juegonuevo.php");
				}
			}
			break;
		}
	}
	
	//$datos=$this->modelo->nuevousuario($_POST['correo'], $_POST['pass1']);
	//Llamada a la vista
	//require_once("vistas/registro.php");
}

?>