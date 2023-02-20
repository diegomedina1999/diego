<?php
// Definimos el tamaño del cuadrado y la cantidad de cuadrados a dibujar
$tamano = 50;
$cantidad = 100;

// Generamos colores aleatorios para los cuadrados
function colorAleatorio() {
  return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}

// Creamos los cuadrados
for ($i = 0; $i < $cantidad; $i++) {
  // Generamos un color aleatorio para el cuadrado
  $color = colorAleatorio();

  // Dibujamos el cuadrado con el color aleatorio
  echo '<div style="background-color: ' . $color . '; width: ' . $tamano . 'px; height: ' . $tamano . 'px; display: inline-block; margin: 5px;"></div>';
}
?>
