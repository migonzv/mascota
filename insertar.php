<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php include './menu.php' ?>

  <form method="post" action="./insertar_logica.php">
    <label id="id_mascota">id_mascota: <input id="id_mascota" name="id_mascota" type="text" required /></label>
    <label id="nombre_mascota">nombre_mascota: <input id="nombre_mascota" name="nombre_mascota" type="text" required /></label>
    <label id="raza">raza: <input id="raza" name="raza" type="text" required /></label>
    <label id="nombre_cliente">nombre_cliente: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
    <legend>Sexo:</legend>
    <input type="radio" name="sexo" id="F" value="F" required>
    <label for="F">Femenino</label>
    <input type="radio" name="sexo" id="M" value="M">
    <label for="M">Masculino</label>
    <label id="tipo_mascota">tipo_mascota:
      <select id="tipo_mascota" name="tipo_mascota" required>
        <option value="">Elige Una</option>
        <option value="perro">perro</option>
        <option value="gato">gato</option>
        <option value="loro">loro</option>
      </select>
    </label>
    <label id="fecha_nacimiento">raza: <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required /></label>
    <input id="registrar" name="Registrar" type="submit" />
    <input id="limpiar" name="Limpiar" type="reset" />
  </form>
</body>
</html>