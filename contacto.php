<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Contacto</title>
</head>
<body>
<?php include './menu.php' ?>
<form method="post" action="./correo.php">
  <label id="nombre_mascota">nombre_mascota: <input id="nombre" name="nombre_mascota" type="text" required /></label>
  <label id="nombre_cliente">nombre_cliente: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
  <label id="mensaje">Mensaje: <textarea id="mensaje" name="mensaje" required rows="5" cols="40"></textarea></label>
  <input id="submit" name="Enviar" type="submit" />
  <input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>