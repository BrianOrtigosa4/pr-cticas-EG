<html>
<head><title>Modificar Ciudad</title></head>
<body>
<?php
include("conexion.inc");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

$vSql = "UPDATE ciudades SET 
            nombre='$nombre', 
            pais='$pais', 
            habitantes=$habitantes, 
            superficie=$superficie, 
            tieneMetro=$tieneMetro 
          WHERE id=$id";
mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "La ciudad fue modificada correctamente.<br><a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
</body>
</html>
