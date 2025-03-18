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
    $sql = "SELECT * FROM usuarios WHERE cedula ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post" action="modificar_logica.php">
    <label for="textfield">Nombre: <input type="text" name="nombre" id="nombre" value="<?php print $row['nombre']; ?>" /></label>
    <label for="textfield2">Apellido: <input type="text" name="apellido" id="apellido" value="<?php print $row['apellido']; ?>" /></label>
    <label for="textfield3">Direccion: <input type="text" name="direccion" id="direccion" value="<?php print $row['direccion']; ?>" /></label>
    <label for="textfield3">Email: <input type="text" name="email" id="email" value="<?php print $row['email']; ?>" /></label>
    <label for="textfield3">Telefono: <input type="text" name="telefono" id="telefono" value="<?php print $row['telefono']; ?>" /></label>
    <legend>Sexo:</legend>
    <?php if ($row['sexo'] == 'F') { ?>
    <input type="radio" name="sexo" value="F" id="F" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="F" id="F" /><?php } ?>
    <label for="F">Femenino</label>
    <?php if ($row['sexo'] == 'M') { ?>
    <input type="radio" name="sexo" value="M" id="M" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="M" id="M" /><?php } ?>
    <label for="M">Masculino</label>
    <label for="select">Nacionalidad:
      <select name="nacionalidad" id="nacionalidad">
        <option value="<?php print $row['nacionalidad']; ?>"><?php print $row['nacionalidad']; ?></option>
        <option value="venezonalo">Venezolano</option>
        <option value="uruguayo">Uruguayo</option>
        <option value="chileno">Chileno</option>
        <option value="argentino">Argentino</option>
      </select>
    </label>
    <label for="textfield3">Ciudad: <input type="text" name="ciudad" id="ciudad" value="<?php print $row['ciudad']; ?>" /></label>
    <input type="hidden" name="oculto" id="oculto" value="<?php print $row['cedula']; ?>" />
    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>