<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Buscar</title>
</head>
<body>
<?php include './menu.php' ?>
  <form method="POST" name="form1">
    <div class="buscardor">
      <label for="buscar">Cedula: </label>
      <input type="text" name="buscar" id="buscar" />
      <input type="submit" value="Buscar" />
    </div>
  </form>
  <?php if (isset($_POST['buscar'])) { ?>
    <table>
      <tr>
        <th >CEDULA</th>
        <th >NOMBRE</th>
        <th >APELLIDO</th>
        <th >DIRECCION</th>
        <th >EMAIL</th>
        <th >TELEFONO</th>
        <th >SEXO</th>
        <th >NACIONALIDAD</th>
        <th >CIUDAD</th>
      </tr>
      <?php
      $sql = "SELECT * FROM usuarios WHERE cedula ='$_POST[buscar]'";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
        <td><?= $row['cedula']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['apellido']; ?></td>
        <td><?= $row['direccion']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['telefono']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nacionalidad']; ?></td>
        <td><?= $row['ciudad']; ?></td>
        </tr> <?php } ?>
    </table> <?php } ?>
</body>
</html>