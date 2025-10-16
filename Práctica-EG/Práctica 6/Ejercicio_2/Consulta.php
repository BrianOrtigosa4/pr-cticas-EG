<html>
<head><title>Listado de Ciudades</title></head>
<body>
<?php
include("conexion.inc");

$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
?>
<table border="1">
<tr>
<th>ID</th><th>Nombre</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>¿Tiene Metro?</th>
</tr>
<?php while ($fila = mysqli_fetch_array($vResultado)) { ?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['pais']; ?></td>
<td><?php echo $fila['habitantes']; ?></td>
<td><?php echo $fila['superficie']; ?></td>
<td><?php echo ($fila['tieneMetro'] ? 'Sí' : 'No'); ?></td>
</tr>
<?php } ?>
</table>
<p><a href="Menu.html">Volver al menú</a></p>
<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
