<?php
$num = 12.3456; // Número a redondear
$decimales = 3; // Cantidad de decimales a redondear

// Multiplicamos el número por 10^decimales y lo redondeamos
$num_redondeado = floor($num * pow(10, $decimales) + 0.5) / pow(10, $decimales);

echo $num_redondeado; // Imprimimos el número redondeado en pantalla
