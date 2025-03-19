<?php
  $link = mysqli_connect("localhost", "root", "", "migonzv_mascotas");

  if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
      . mysqli_connect_error());
  }
?>