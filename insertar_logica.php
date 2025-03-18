<?php
  include "./conexion.php";
  $sql="INSERT INTO usuarios VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[apellido]', '$_POST[direccion]','$_POST[email]','$_POST[telefono]','$_POST[sexo]','$_POST[nacionalidad]','$_POST[ciudad]')";
  $result = mysqli_query($link, $sql); //ejecuto la consulta
  if (!mysqli_error($link)) {
?>
<script>
  alert("Se ingreso con total normalidad");
</script>
<?php
  }else{
?>
<script>
  alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">