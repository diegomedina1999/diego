<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Panadería</title>
</head>
<body>
    <h1>Pedido de Panadería</h1>
    <form method="post" action="resumen.php">
        <label for="barras">Barras de pan:</label>
        <input type="number" name="barras" id="barras" min="0"><br><br>
        <label for="bollos">Bollos:</label>
        <input type="number" name="bollos" id="bollos" min="0"><br><br>
        <label for="pan_bocatas">Pan de bocatas:</label>
        <input type="number" name="pan_bocatas" id="pan_bocatas" min="0"><br><br>
        <label for="fuente">¿Cómo nos has encontrado?</label>
        <select name="fuente" id="fuente">
            <option value="buscador">A través de un buscador</option>
            <option value="amigo">Me lo recomendó un amigo</option>
            <option value="anuncio">Vi un anuncio en internet</option>
            <option value="otro">Otro</option>
        </select><br><br>
        <input type="submit" value="Enviar Pedido">
    </form>
</body>
</html>
