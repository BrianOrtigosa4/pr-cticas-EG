<html>
<head><title>Alta Ciudad</title></head>
<body>
<?php
include("conexion.inc");

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tieneMetro = $_POST['tieneMetro'];

$vSql = "SELECT COUNT(*) as canti FROM ciudades WHERE nombre='$nombre' AND pais='$pais'";
$vResultado = mysqli_query($link, $vSql);
$vCant = mysqli_fetch_assoc($vResultado);

if ($vCant['canti'] != 0) {
    echo "La ciudad ya existe.<br>";
    echo "<a href='Menu.html'>Volver al menú</a>";
} else {
    $vSql = "INSERT INTO ciudades (nombre, pais, habitantes, superficie, tieneMetro)
             VALUES ('$nombre', '$pais', $habitantes, $superficie, $tieneMetro)";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo "La ciudad fue registrada exitosamente.<br>";
    echo "<a href='Menu.html'>Volver al menú</a>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
