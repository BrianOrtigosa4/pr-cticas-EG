<html>
<head><title>Baja Ciudad</title></head>
<body>
<?php
include("conexion.inc");

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];

$vSql = "SELECT * FROM ciudades WHERE nombre='$nombre' AND pais='$pais'";
$vResultado = mysqli_query($link, $vSql);

if (mysqli_num_rows($vResultado) == 0) {
    echo "Ciudad inexistente.<br><a href='FormBajaIni.html'>Continuar</a>";
} else {
    $vSql = "DELETE FROM ciudades WHERE nombre='$nombre' AND pais='$pais'";
    mysqli_query($link, $vSql);
    echo "La ciudad fue eliminada.<br><a href='Menu.html'>Volver al menú</a>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
