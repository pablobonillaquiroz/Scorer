<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="css/estilojuego.css">
	<title>Play Ball!</title>
</head>
<body>

	<header>
	
	<div class="informacion">
	Fecha: 4/3/2015
	<a href="#">New York Yankees</a> vs. <a href="#">Boston Red Sox</a>
	Campo: <a href="#">Yankee Stadium</a>
	Hora: 17:50 pm
	</div>
	</header>

	<div class="datosjuego">

	<table class="strikes">
		<tr>
			<td>Strikes:</td>   <td>1</td>
		</tr>
		<tr>
			<td>Bolas:</td>     <td>1</td>
		</tr>
		<tr>
			<td>Outs:</td> 	<td>1</td>
		</tr>
	</table>

	<table class="pizarra">
		<tr>
			<td></td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>C</td>
			<td>H</td>
			<td>E</td>
		</tr>
		<tr>
			<td>Yankees</td>
			<td>0</td>
			<td>0</td>
			<td>1</td>
			<td>0</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		<tr>
			<td>Red Sox</td>
			<td>0</td>
			<td>3</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>0</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
		</tr>
		
	</table>

	</div>

<div class="contenido">

	<div class="imagen">
		<img id="jugador" src="img/derek.jpg">
	</div>

	<div class="tablabotones">
		<button class="bateo">H1</button><!-- Hit Sencillo -->
		<button class="bateo">H2</button><!-- Hit Doble -->
		<button class="bateo">H3</button><!-- Hit Triple -->
	</div>
	
	<div class="tablabotones">
		<button class="bateo">HR</button><!-- Home Run -->
		<button class="bateo">BB</button><!-- Base por Bola -->
		<button class="bateo">BG</button><!-- Base por Golpe -->
	</div>

	<div class="tablabotones">
		<button class="bateo">K</button><!-- Ponche o Strike Out -->
		<button class="bateo">O</button><!-- Out (Se necesita especificar el o los jugadores que hicieron el out) -->
		<button class="bateo">BO</button><!-- Bola Ocupada (El bateador llegó a la base, pero a uno de sus compañeros le hicieron out en la misma jugada) -->
	</div>

</div>

	

</body>
</html>