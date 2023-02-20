<?php
// Comprobamos si se ha enviado una imagen
if (isset($_FILES['imagen'])) {
  // Obtenemos la información del archivo subido
  $nombreArchivo = $_FILES['imagen']['name'];
  $tipoArchivo = $_FILES['imagen']['type'];
  $tamañoArchivo = $_FILES['imagen']['size'];
  $rutaArchivo = $_FILES['imagen']['tmp_name'];

  // Comprobamos si el archivo es GIF o JPG y no pasa de 200kb
  if (($tipoArchivo == 'image/gif' || $tipoArchivo == 'image/jpeg') && $tamañoArchivo <= 200000) {
    // Movemos el archivo al directorio "imagenes"
    $rutaDestino = 'imagenes/' . $nombreArchivo;
    move_uploaded_file($rutaArchivo, $rutaDestino);

    // Mostramos todas las imágenes que se han subido
    $directorio = 'imagenes/';
    $archivos = glob($directorio . '*.gif');
    $archivos = array_merge($archivos, glob($directorio . '*.jpg'));

    foreach ($archivos as $archivo) {
      echo '<img src="' . $archivo . '"><br>';
    }
  } else {
    // Mostramos un mensaje de error si el archivo no cumple las condiciones
    echo 'El archivo debe ser GIF o JPG y no pasar de 200kb.';
  }
}
?>

<!-- Formulario para subir una imagen -->
<form method="post" enctype="multipart/form-data">
  <input type="file" name="imagen">
  <input type="submit" value="Subir">
</form>
