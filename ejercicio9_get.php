<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Pedido de Panadería</title>
</head>
<body>
	<h1>Formulario de Pedido de Panadería</h1>
	<form method="get" action="procesar_pedido.php">
		<label for="barras">Cantidad de barras de pan:</label>
		<input type="number" id="barras" name="barras"><br><br>
		
		<label for="bollos">Cantidad de bollos:</label>
		<input type="number" id="bollos" name="bollos"><br><br>
		
		<label for="panbocatas">Cantidad de pan de bocatas:</label>
		<input type="number" id="panbocatas" name="panbocatas"><br><br>
		
		<label for="fuente">¿Cómo encontraste nuestra página web?</label>
		<input type="text" id="fuente" name="fuente"><br><br>
		
		<input type="submit" value="Enviar Pedido">
	</form>
</body>
</html>
