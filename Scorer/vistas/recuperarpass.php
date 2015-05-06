<html>
<head>
	<title>Recuperar Password</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript">
		function validar()
		{
			var correo = document.getElementById('correo').value;

			nodocorreo = document.getElementById("mensajecorreo");
			if(nodocorreo.hasChildNodes())
			{
				while ( nodocorreo.childNodes.length >= 1 )
				{
					nodocorreo.removeChild( nodocorreo.firstChild );
				}	
			}


			if(!/\S+@\S+\.\S+/.test(correo) || correo.length == 0)
			{
				var node = document.getElementById("mensajecorreo");
				var textnode = document.createTextNode("Correo no válido.");
				node.appendChild(textnode);
				return false;
			}
			return true;
		}
	</script>
</head>
	<div id="contenido">
	<div><h1>Ingrese su cuenta de correo. En breve se enviará un link para que pueda recuperar su contraseña.</h1> </div>
	<form>
	<div id="mensajecorreo"></div>
	<div>
		<input type="email" name="correo" id="correo" placeholder="E-mail">
	</div>
	<div>
		<button type="submit" id="enviar" onclick="return validar()">Enviar</button>
	</div>
	</form>
	<div>
	<a href="index.html">Regresar al inicio</a>
	</div>
</div>
<body>
</body>
</html>