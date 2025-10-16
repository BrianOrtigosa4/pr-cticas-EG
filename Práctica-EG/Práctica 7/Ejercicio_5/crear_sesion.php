<?php
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['usuario'] = $usuario;
$_SESSION['clave'] = $clave;
?>

<html>
<head>
  <title>Sesión Creada</title>
</head>
<body>
  <h2>Sesión creada correctamente</h2>
  <p>Se guardaron los siguientes datos:</p>
  <ul>
    <li>Usuario: <?php echo $_SESSION['usuario']; ?></li>
    <li>Clave: <?php echo $_SESSION['clave']; ?></li>
  </ul>

  <p><a href="mostrar_sesion.php">Ir a la página que muestra las variables de sesión</a></p>
</body>
</html>
