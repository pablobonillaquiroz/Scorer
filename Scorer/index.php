<?php
	require_once("db/db.php");
	switch ($_GET["ctl"]) {
		case "usuario":
			require_once("controlador/usuarios_controlador.php");
			$ctl = new Usuario();
			break;
		default:
	}

	$ctl -> ejecutar();
	
?>