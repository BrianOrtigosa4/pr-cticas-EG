<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador, time() + 3600);
    echo "<h1>Has visitado esta página $contador veces.</h1>";
} else {
    setcookie('contador', 1, time() + 3600);
    echo "<h1>Bienvenido a esta página por primera vez!</h1>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
</head>
<body>
    <p>Refresca la página para incrementar el contador.</p>
</body>
</html>