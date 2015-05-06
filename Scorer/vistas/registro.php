<html>
<head>
	<title>Registro</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src = "http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		function validacion()
		{
			c = document.getElementById("correo").value;
			p1 = document.getElementById("pass1").value;
			p2 = document.getElementById("pass2").value;

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

			if(p1.length == 0 || p2.length == 0)
			{
				var node = document.getElementById("mensajepass");
				var textnode = document.createTextNode("Debe llenar el campo de password.");
				node.appendChild(textnode);
				return false;
			}

			/*Aqui empieza el cagadero
				
				if(window.XMLHttpRequest) {
    				peticion_http = new XMLHttpRequest();
  				}
  				else if(window.ActiveXObject) {
    				peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  				}
 
  				// Preparar la funcion de respuesta
  				peticion_http.onreadystatechange = muestraContenido;
 
  				// Realizar peticion HTTP
  				var usuario = document.getElementById("correo").value;
  				var pw = document.getElementById("pass1").value;
  				var url = "http://localhost/proyecto/insertar.php?usuario=" + usuario + "&pw=" + pw;
  				peticion_http.open("POST",  url , true);
  				peticion_http.send(null);
 
  				function muestraContenido() 
  				{
    				if(peticion_http.readyState == 4) 
    				{
      					if(peticion_http.status == 200) 
      					{
        					alert(peticion_http.responseText);
      					}
    				}
  				}

			/*Aqui acaba el cagadero*/

			return true;
	}
	</script>
	
</head>
<body>
	<h1>Bienvenido. Para registrarte solo necesitas tu cuenta de e-mail y una contraseña.</h1>
	<form action="index.php?ctl=usuario&accion=alta" method="POST">
		<div><input type="email" name="correo" placeholder="E-mail" id="correo"></div>
		<div id="mensajecorreo"></div>
		<div><input type="password" name="pass1" placeholder="Contraseña" id="pass1"></div>
		<div><input type="password" name="pass2" placeholder="Repite tu contraseña" id="pass2"></div>
		<div id="mensajepass"></div>
		<div><button type="submit" id="enviar" onclick="return validacion()">Registrar</button></div>
	</form>
</body>
</html>