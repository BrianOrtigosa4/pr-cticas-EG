<?php
session_start();
unset($_SESSION['carrito']);
?>

<html>
<head><title>Carrito vaciado</title></head>
<body>
<h3>El carrito ha sido vaciado.</h3>
<p><a href="catalogo.php">Volver al catálogo</a></p>
</body>
</html>
