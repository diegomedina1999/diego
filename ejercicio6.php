<?php
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
               "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

sort($meses); // Ordenamos los meses alfabéticamente

foreach ($meses as $mes) {
  echo $mes . '<br>'; // Imprimimos cada mes en pantalla
}
