<html>
<head>
	<title>Bienvenido a Scorer!</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript">
	function validacion()
	{
		c = document.getElementById("correo").value;
		p = document.getElementById("pass").value;

		nodocorreo = document.getElementById("mensajecorreo");
		if(nodocorreo.hasChildNodes())
		{
			while ( nodocorreo.childNodes.length >= 1 )
			{
				nodocorreo.removeChild( nodocorreo.firstChild );
			}	
		}

		nodopass = document.getElementById("mensajepass");
		if(nodopass.hasChildNodes())
		{
			while ( nodopass.childNodes.length >= 1 )
			{
				nodopass.removeChild( nodopass.firstChild );
			}	
		}

		if (c.length == 0) 
		{
			var node = document.getElementById("mensajecorreo");
			var textnode = document.createTextNode("No se permiten correos vacíos.");
			node.appendChild(textnode);
			return false;
		}

		//////////////////////////////////////////////////////////////

		if(!/\S+@\S+\.\S+/.test(c)) 
		{
			var node = document.getElementById("mensajecorreo");
			var textnode = document.createTextNode("Correo no válido.");
			node.appendChild(textnode);
			return false;
		}

		//////////////////////////////////////////////////////////////

		if(p.length == 0)
		{
			var node = document.getElementById("mensajepass");
			var textnode = document.createTextNode("Debe llenar el campo de password.");
			node.appendChild(textnode);
			return false;
		}

		return true;
	}
	</script>
	
</head>
<body>
	<h1>
		Iniciar Sesión
	</h1>
	<form action="index.php?ctl=usuario&accion=login" method="POST">
	<div>
		<label for="correo" type="email">Correo:</label>
	</div>
	<div>
		<input type="e-mail" id="correo" name="correo" placeholder="Correo electrónico">
	</div>
	<div id="mensajecorreo">
		
	</div>
	<div>
		<label for="pass">Contraseña:</label>
	</div>
	<div>
		<input type="password" id="pass" name="pass" placeholder="Password">
	</div>
	<div id="mensajepass">
		
	</div>
	<div>
		<button type="submit" id="enviar" onclick=" return validacion()">Iniciar Sesión</button>
	</div>
	</form>
	<div>
		<a href="recuperarpass.php">Olvidé mi contraseña</a>
	</div>
	<div>
		<a href="registro.php">Registrarme</a>
	</div>
	<div>
		<a href="acerca.php">Acerca de nosotros</a>
	</div>
</body>
</html>