<!DOCTYPE html>
<html>
<head>
  <title>Pedido de la panadería</title>
</head>
<body>
  <h1>Pedido de la panadería</h1>
  <form method="post" action="procesar_pedido.php">
    <p>
      <label for="barras">Barras de pan (1€/unidad):</label>
      <input type="number" id="barras" name="barras" min="0">
    </p>
    <p>
      <label for="bollos">Bollos (0,50€/unidad):</label>
      <input type="number" id="bollos" name="bollos" min="0">
    </p>
    <p>
      <label for="bocatas">Pan de bocatas (1,50€/unidad):</label>
      <input type="number" id="bocatas" name="bocatas" min="0">
    </p>
    <p>
      <label for="encontrado">¿Cómo encontró nuestra página web?</label>
      <select id="encontrado" name="encontrado">
        <option value="amigos">Por amigos</option>
        <option value="buscador">Por un buscador</option>
        <option value="publicidad">Por publicidad</option>
        <option value="otro">Otro</option>
      </select>
    </p>
    <p>
      <input type="submit" value="Enviar pedido">
    </p>
  </form>
</body>
</html>
