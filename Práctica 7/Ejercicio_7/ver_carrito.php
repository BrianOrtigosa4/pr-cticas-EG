<?php
session_start();
include("conexion.inc");

echo "<h2>Carrito de Compras</h2>";

if (!isset($_SESSION['carrito']) || count($_SESSION['carrito']) == 0) {
    echo "<p>El carrito está vacío.</p>";
    echo "<p><a href='catalogo.php'>Volver al catálogo</a></p>";
    exit;
}

$total = 0;

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Producto</th><th>Precio Unitario</th><th>Cantidad</th><th>Subtotal</th><th>Acción</th></tr>";

foreach ($_SESSION['carrito'] as $id => $cantidad) {
    $vSql = "SELECT producto, precio FROM catalogo WHERE id = $id";
    $vResultado = mysqli_query($link, $vSql);
    $fila = mysqli_fetch_array($vResultado);

    $subtotal = $fila['precio'] * $cantidad;
    $total += $subtotal;

    echo "<tr>";
    echo "<td>" . $fila['producto'] . "</td>";
    echo "<td>$" . number_format($fila['precio'], 2) . "</td>";
    echo "<td>" . $cantidad . "</td>";
    echo "<td>$" . number_format($subtotal, 2) . "</td>";
    echo "<td><a href='ver_carrito.php?eliminar=$id'>Eliminar</a></td>";
    echo "</tr>";

    mysqli_free_result($vResultado);
}

// Eliminar un producto
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    unset($_SESSION['carrito'][$idEliminar]);
    header("Location: ver_carrito.php");
    exit;
}

echo "</table>";
echo "<h3>Total: $" . number_format($total, 2) . "</h3>";
echo "<p><a href='catalogo.php'>Seguir comprando</a></p>";
echo "<p><a href='vaciar_carrito.php'>Vaciar carrito</a></p>";

mysqli_close($link);
?>
