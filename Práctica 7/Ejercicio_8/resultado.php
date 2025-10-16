<html>
<head>
  <title>Resultado de la búsqueda</title>
</head>
<body>
<?php
include("conexion.inc");

$nombre = $_POST['nombre'];

$vSql = "SELECT * FROM buscador WHERE LOWER(canciones) LIKE LOWER('%$nombre%')";
$vResultado = mysqli_query($link, $vSql);
$cantidad = mysqli_num_rows($vResultado);

if ($cantidad == 0) {
    echo "<h3>No se encontraron canciones que coincidan con '$nombre'</h3>";
} else {
    echo "<h3>Se encontraron $cantidad resultado(s):</h3>";
    echo "<ul>";
    while ($fila = mysqli_fetch_array($vResultado)) {
        echo "<li>" . $fila['canciones'] . "</li>";
    }
    echo "</ul>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
<p><a href="buscador.html">Volver al buscador</a></p>
</body>
</html>
