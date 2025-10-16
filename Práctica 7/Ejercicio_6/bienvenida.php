<?php
session_start();
?>

<html>
<head><title>Bienvenida</title></head>
<body>
<?php
if (isset($_SESSION['nombre'])) {
    echo "<h2>¡Bienvenido/a, " . $_SESSION['nombre'] . "!</h2>";
    echo "<p>Podés acceder a esta página porque tu sesión está activa.</p>";
    echo "<a href='cerrar_sesion.php'>Cerrar sesión</a>";
} else {
    echo "<h2>No podés visitar esta página.</h2>";
    echo "<p>Por favor, <a href='formulario.html'>iniciá sesión primero</a>.</p>";
}
?>
</body>
</html>
