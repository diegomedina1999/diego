<?php
// obtener los datos del formulario
$barras = $_GET['barras'];
$bollos = $_GET['bollos'];
$panbocatas = $_GET['panbocatas'];
$fuente = $_GET['fuente'];

// validar los datos del formulario (asegurarse de que no sean nulos)
if (empty($barras) && empty($bollos) && empty($panbocatas)) {
	echo "Por favor, seleccione al menos un producto.";
} else {
	// enviar el pedido por correo electrónico o almacenarlo en una base de datos
	// aquí iría el código para enviar el correo electrónico o almacenar el pedido en la base de datos
	// ...

	// mostrar el mensaje de confirmación
	echo "Pedido enviado correctamente. Gracias!";
}
?>
