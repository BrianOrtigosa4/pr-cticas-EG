<?php
if (isset($_POST['username'])) {
    setcookie('username', $_POST['username'], time() + 3600);
    $username = $_POST['username'];
} elseif (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    $username = '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h1>Ingrese su nombre de usuario</h1>
    <form method="post" action="">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
        <input type="submit" value="Guardar Usuario">
    </form>
    <?php
    if ($username) {
        echo "<p>Último nombre de usuario ingresado: " . htmlspecialchars($username) . "</p>";
    }
    ?>
    <p>Refresca la página para ver el nombre de usuario guardado en la cookie.</p>
</body>