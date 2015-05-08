<html>
<head>
	<title>Recuperar Password</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript">
	function validacion()
	{
		p  = document.getElementById("passactual").value;
		p1 = document.getElementById("passantiguo").value;
		p2 = document.getElementById("passnuevo").value;

		nodo = document.getElementById("mensajepass");
		if(nodo.hasChildNodes())
		{
			while ( nodo.childNodes.length >= 1 )
			{
				nodo.removeChild( nodo.firstChild );
			}	
		}

		if(p1.length == 0 || p2.length == 0 || p.length == 0)
		{
			var node = document.getElementById("mensajepass");
			var textnode = document.createTextNode("No se permiten contraseñas vacías.");
			node.appendChild(textnode);
			return false;
		}
		return true;
	}
	</script>
</head>
	<div id="contenido">
	<div><h1>Ingrese su nueva contraseña.</h1> </div>
	<form>
		<div><input type="password" name="correo" id="correo" placeholder="E-mail"></div>
		<div><input type="password" name="pass" id="passactual" placeholder="Contraseña actual"></div>
		<div><input type="password" name="pass1" id="passantiguo" placeholder="Contraseña nueva"></div>
		<div><input type="password" name="pass2" id="passnuevo" placeholder="Contraseña nueva"></div>
		<div id="mensajepass"></div>
		<div><button type="submit" onclick="return validacion()">Guardar</button> </div>
	</form>
	</div>
<body>
</body>
</html>