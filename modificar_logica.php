<?php include("./conexion.php");
$sql = "UPDATE usuarios SET nombre='$_POST[nombre]', apellido='$_POST[apellido]',direccion='$_POST[direccion]',email='$_POST[email]',telefono='$_POST[telefono]', sexo='$_POST[sexo]', nacionalidad='$_POST[nacionalidad]' , ciudad='$_POST[ciudad]' where cedula='$_POST[oculto]'";
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