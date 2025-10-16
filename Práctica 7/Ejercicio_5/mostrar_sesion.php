<?php
session_start();
?>

<html>
<head>
  <title>Mostrar Variables de Sesión</title>
</head>
<body>
  <h2>Datos almacenados en la sesión:</h2>
  <?php
  if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
      echo "<p>Usuario: " . $_SESSION['usuario'] . "</p>";
      echo "<p>Clave: " . $_SESSION['clave'] . "</p>";
  } else {
      echo "<p>No existen variables de sesión. Por favor, ingrese desde el formulario.</p>";
  }
  ?>
  <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>
