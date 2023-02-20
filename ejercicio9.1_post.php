<?php
// Obtenemos los valores del formulario
$barras = $_POST['barras'];
$bollos = $_POST['bollos'];
$bocatas = $_POST['bocatas'];
$encontrado = $_POST['encontrado'];

// Calculamos el precio total del pedido
$precioTotal = ($barras * 1) + ($bollos * 0.5) + ($bocatas * 1.5);

// Enviamos el pedido por correo electrónico
$destinatario = 'info@panaderia.com';
$asunto = 'Nuevo pedido de la página web';
$mensaje = 'Se ha recibido un nuevo pedido desde la página web de la panadería. Los detalles son los siguientes:' . "\n\n";
$mensaje .= 'Barras de pan: ' . $barras . "\n";
$mensaje .= 'Bollos: ' . $bollos . "\n";
$mensaje .= 'Pan de bocatas: ' . $bocatas . "\n";
$mensaje .= 'Precio total: ' . $precioTotal . '€' . "\n";
$mensaje .= 'Cómo nos encontró: ' . $encontrado . "\n";
$headers = 'From: info@panaderia.com' . "\r\n" .
           'Reply-To: info@panaderia.com'
