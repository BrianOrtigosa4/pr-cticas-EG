<?php
$link = mysqli_connect("localhost", "root", "") or die("Problemas de conexión");
mysqli_select_db($link, "prueba") or die("Error al seleccionar la base de datos");
?>
