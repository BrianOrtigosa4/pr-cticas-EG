<?php
$link = mysqli_connect("localhost", "root", "") or die("Problemas de conexión a la base de datos");
mysqli_select_db($link, "ciudades_db") or die("Error al seleccionar la base de datos");
?>
