<?php
$numero = 1; // Inicializar el número
$suma = 0; // Inicializar la variable para la suma total

while ($numero <= 50) {
    $cuadrado = $numero * $numero; // Calcular el cuadrado del número
    echo "El cuadrado de " . $numero . " es " . $cuadrado . "<br>"; // Imprimir el resultado
    $suma += $cuadrado; // Sumar el cuadrado a la suma total
    $numero++; // Incrementar el número para la siguiente iteración
}

echo "La suma total es: " . $suma; // Imprimir la suma total
?>
