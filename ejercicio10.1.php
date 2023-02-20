<!DOCTYPE html>
<html>
<head>
    <title>Resumen de Pedido</title>
</head>
<body>
    <h1>Resumen de Pedido</h1>
    <p>Gracias por tu pedido. Aquí tienes un resumen:</p>

    <?php
    $barras = $_POST["barras"];
    $bollos = $_POST["bollos"];
    $pan_bocatas = $_POST["pan_bocatas"];
    $fuente = $_POST["fuente"];

    $total = $barras + $bollos + $pan_bocatas;

    if ($total > 0) {
        echo "<p>Has pedido:</p>";
        echo "<ul>";
        if ($barras > 0) {
            echo "<li>$barras barras de pan</li>";
        }
        if ($bollos > 0) {
            echo "<li>$bollos bollos</li>";
        }
        if ($pan_bocatas > 0) {
            echo "<li>$pan_bocatas panes de bocatas</li>";
        }
        echo "</ul>";
        echo "<p>Gracias por tu pedido. Nos has conocido a través de $fuente.</p>";
    } else {
        echo "<p>No has pedido nada. Por favor, vuelve al formulario y selecciona al menos un artículo.</p>";
    }
