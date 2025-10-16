<html>
<head><title>Modificar Ciudad</title></head>
<body>
<?php
include("conexion.inc");

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];

$vSql = "SELECT * FROM ciudades WHERE nombre='$nombre' AND pais='$pais'";
$vResultado = mysqli_query($link, $vSql);
$fila = mysqli_fetch_array($vResultado);

if (mysqli_num_rows($vResultado) == 0) {
    echo "Ciudad inexistente.<br><a href='FormModiIni.html'>Continuar</a>";
} else {
?>
<form action="Modi.php" method="POST">
<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
<table>
<tr><td>Nombre:</td><td><input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"></td></tr>
<tr><td>País:</td><td><input type="text" name="pais" value="<?php echo $fila['pais']; ?>"></td></tr>
<tr><td>Habitantes:</td><td><input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"></td></tr>
<tr><td>Superficie:</td><td><input type="number" name="superficie" value="<?php echo $fila['superficie']; ?>"></td></tr>
<tr><td>¿Tiene Metro?</td>
<td>
<select name="tieneMetro">
<option value="1" <?php if ($fila['tieneMetro']) echo "selected"; ?>>Sí</option>
<option value="0" <?php if (!$fila['tieneMetro']) echo "selected"; ?>>No</option>
</select>
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Guardar cambios"></td></tr>
</table>
</form>
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
