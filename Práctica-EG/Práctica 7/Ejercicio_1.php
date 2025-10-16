<?php
session_start();
if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}
if (isset($_POST['fuente'])) {
    $_SESSION['fuente'] = $_POST['fuente'];
}
if (isset($_POST['tamanio'])) {
    $_SESSION['tamanio'] = $_POST['tamanio'];
}
$color = isset($_SESSION['color']) ? $_SESSION['color'] : 'white';
$fuente = isset($_SESSION['fuente']) ? $_SESSION['fuente'] : 'Arial';
$tamanio = isset($_SESSION['tamanio']) ? $_SESSION['tamanio'] : '16px';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configuración de Estilo</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($color); ?>;
            font-family: <?php echo htmlspecialchars($fuente); ?>;
            font-size: <?php echo htmlspecialchars($tamanio); ?>;
        }
    </style>
</head>
<body>
    <h1>Configura el estilo de la página</h1>
    <form method="post" action="">
        <label for="color">Color de fondo:</label>
        <input type="color" id="color" name="color" value="<?php echo htmlspecialchars($color); ?>"><br><br>
        <label for="fuente">Fuente:</label>
        <select id="fuente" name="fuente">
            <option value="Arial" <?php if ($fuente == 'Arial') echo 'selected'; ?>>Arial</option>
            <option value="Verdana" <?php if ($fuente == 'Verdana') echo 'selected'; ?>>Verdana</option>
            <option value="Times New Roman" <?php if ($fuente == 'Times New Roman') echo 'selected'; ?>>Times New Roman</option>
            <option value="Courier New" <?php if ($fuente == 'Courier New') echo 'selected'; ?>>Courier New</option>
        </select><br><br>

        <label for="tamanio">Tamaño de fuente:</label>
        <input type="number" id="tamanio" name="tamanio" value="<?php echo rtrim($tamanio, 'px'); ?>" min="10" max="36"> px<br><br>

        <input type="submit" value="Guardar configuración">
    </form>
    <p>Esta es una vista previa del estilo seleccionado.</p>
</body>
</html>