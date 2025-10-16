<?php
session_start();
include("conexion.inc");

$mail = $_POST['mail'];

$vSql = "SELECT nombre FROM alumnos WHERE mail = '$mail'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if ($fila = mysqli_fetch_array($vResultado)) {
    $_SESSION['nombre'] = $fila['nombre'];
    echo "<h3>Bienvenido, " . $_SESSION['nombre'] . "</h3>";
    echo "<p>La variable de sesión ha sido creada.</p>";
    echo "<a href='bienvenida.php'>Ir a la página de bienvenida</a>";
} else {
    echo "<h3>No existe ningún alumno con el mail ingresado.</h3>";
    echo "<a href='formulario.html'>Volver al formulario</a>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
