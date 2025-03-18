<?php include './conexion.php' ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php include './menu.php' ?>
  <table>
    <tr>
      <th>CEDULA</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>DIRECCION</th>
      <th>EMAIL</th>
      <th>TELEFONO</th>
      <th>SEXO</th>
      <th>NACIONALIDAD</th>
      <th>CIUDAD</th>
    </tr>
    <?php
      $sql = "SELECT * FROM usuarios";
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
      </tr>
    <?php } ?>
  </table>
</body>
</html>