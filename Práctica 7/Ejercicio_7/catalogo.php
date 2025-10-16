<?php
session_start();
include("conexion.inc");

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_GET['agregar'])) {
    $id = $_GET['agregar'];
    if (!isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id] = 1;
    } else {
        $_SESSION['carrito'][$id]++;
    }
    echo "<p style='color:green;'>Producto agregado al carrito.</p>";
}

$vSql = "SELECT * FROM catalogo";
$vResultado = mysqli_query($link, $vSql);
?>

<html>
<head><title>Catálogo de Productos</title></head>
<body>
<h2>Catálogo de Productos</h2>
<table border="1" cellpadding="5" cellspacing="0">
<tr>
<th>ID</th><th>Producto</th><th>Precio</th><th>Acción</th>
</tr>

<?php while ($fila = mysqli_fetch_array($vResultado)) { ?>
<tr>
  <td><?php echo $fila['id']; ?></td>
  <td><?php echo $fila['producto']; ?></td>
  <td>$<?php echo number_format($fila['precio'], 2); ?></td>
  <td><a href="catalogo.php?agregar=<?php echo $fila['id']; ?>">Agregar al carrito</a></td>
</tr>
<?php } ?>
</table>

<p><a href="ver_carrito.php">Ver carrito de compras</a></p>

<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
