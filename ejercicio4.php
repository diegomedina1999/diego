<?php
$suma = 0; // Inicializar la variable para la suma total

for ($i = 1; $i <= 100; $i++) {
  if ($i % 5 == 0) { // Verificar si es múltiplo de 5
    echo $i . '<br>'; // Imprimir el número en pantalla
    $suma += $i; // Sumar el número a la suma total
  }
}

$suma_cuadrado = $suma * $suma; // Calcular el cuadrado de la suma
echo "El cuadrado de la suma de los múltiplos de 5 es: " . $suma_cuadrado; // Imprimir el resultado

