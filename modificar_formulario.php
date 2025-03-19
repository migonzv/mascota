<?php include "./conexion.php"; ?>
<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Modificar Formulario</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php
    $sql = "SELECT * FROM usuarios WHERE id_mascota ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post" action="modificar_logica.php">
    <label for="textfield">id_mascota: <input type="text" name="id_mascota" id="id_mascota" value="<?php print $row['id_mascota']; ?>" /></label>
    <label for="textfield2">nombre_mascota: <input type="text" name="nombre_mascota" id="nombre_mascota" value="<?php print $row['nombre_mascota']; ?>" /></label>
    <label for="textfield3">tipo_mascota: <input type="text" name="tipo_mascota" id="tipo_mascota" value="<?php print $row['tipo_mascota']; ?>" /></label>
    <label for="textfield3">raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza']; ?>" /></label>
    <label for="textfield3">sexo: <input type="text" name="sexo" id="sexo" value="<?php print $row['sexo']; ?>" /></label>
    <legend>Sexo:</legend>
    <?php if ($row['sexo'] == 'F') { ?>
    <input type="radio" name="sexo" value="F" id="F" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="F" id="F" /><?php } ?>
    <label for="F">Femenino</label>
    <?php if ($row['sexo'] == 'M') { ?>
    <input type="radio" name="sexo" value="M" id="M" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="M" id="M" /><?php } ?>
    <label for="M">Masculino</label>
    <label for="select">tipo_mascota:
      <select name="tipo_mascota" id="tipo_mascota">
        <option value="<?php print $row['tipo_mascota']; ?>"><?php print $row['tipo_mascota']; ?></option>
        <option value="perro">perro</option>
        <option value="gato">gato</option>
        <option value="loro">loro</option>
      </select>
    </label>
    <input type="hidden" name="oculto" id="oculto" value="<?php print $row['id_mascota']; ?>" />
    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>