<html>
<head><title>Listado con Paginación</title></head>
<body>
<?php
include("conexion.inc");

$Cant_por_Pag = 3;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $Cant_por_Pag;

$vSqlTotal = "SELECT * FROM ciudades";
$vResultadoTotal = mysqli_query($link, $vSqlTotal);
$total_registros = mysqli_num_rows($vResultadoTotal);
$total_paginas = ceil($total_registros / $Cant_por_Pag);

$vSql = "SELECT * FROM ciudades LIMIT $inicio, $Cant_por_Pag";
$vResultado = mysqli_query($link, $vSql);
?>
<table border="1">
<tr><th>ID</th><th>Nombre</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>¿Tiene Metro?</th></tr>
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
<p>
<?php
for ($i = 1; $i <= $total_paginas; $i++) {
  if ($i == $pagina)
    echo "$i ";
  else
    echo "<a href='Listado_pag.php?pagina=$i'>$i</a> ";
}
?>
</p>
<p><a href="Menu.html">Volver al menú</a></p>
<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
