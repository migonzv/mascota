<?php include("./conexion.php");
$sql = "UPDATE usuarios SET nombre_mascota='$_POST[nombre_mascota]',tipo_mascota='$_POST[tipo_mascota]',raza='$_POST[raza]',sexo='$_POST[sexo]', nombre_cliente='$_POST[nombre_cliente]', fecha_nacimiento='$_POST[fecha_nacimiento]' WHERE id_mascota='$_POST[oculto]'";
$result = mysqli_query($link, $sql);
if (!mysqli_error($link)) {
?>
  <script>
    alert("Se modifico correctamente");
  </script>
<?php } else { ?>
  <script>
    alert("Estamos en mantenimiento preventivo");
  </script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=modificar.php">