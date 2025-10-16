<!--Confeccionar una página que simule ser la de un periódico. La misma debe permitir configurar qué
tipo de titular deseamos que aparezca al visitarla, pudiendo ser:
Noticia política, Noticia económica o Noticia deportiva.
Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.
Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el
sitio deben aparecer los tres titulares. Disponer un hipervínculo a una tercer página que borre la
cookie creada. -->
<?php
if (isset($_POST['titular'])) {
    setcookie('titular', $_POST['titular'], time() + 3600);
    $titular = $_POST['titular'];
} elseif (isset($_COOKIE['titular'])) {
    $titular = $_COOKIE['titular'];
} else {
    $titular = '';
}
function obtenerTitular($tipo) {
    switch ($tipo) {
        case 'politica':
            return "Noticia Política: Nuevo acuerdo internacional firmado.";
        case 'economica':
            return "Noticia Económica: La bolsa alcanza un nuevo récord histórico.";
        case 'deportiva':
            return "Noticia Deportiva: El equipo local gana el campeonato.";
        default:
            return "Seleccione un tipo de titular para ver la noticia.";
    }
}
$titularTexto = obtenerTitular($titular);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico</title>
</head>
<body>
    <h1>Periódico</h1>
    <form method="post" action="">
        <label><input type="radio" name="titular" value="politica" <?php if ($titular == 'politica') echo 'checked'; ?>> Noticia Política</label><br>
        <label><input type="radio" name="titular" value="economica" <?php if ($titular == 'economica') echo 'checked'; ?>> Noticia Económica</label><br>
        <label><input type="radio" name="titular" value="deportiva" <?php if ($titular == 'deportiva') echo 'checked'; ?>> Noticia Deportiva</label><br><br>
        <input type="submit" value="Guardar Titular">
    </form>
    <h2><?php echo htmlspecialchars($titularTexto); ?></h2>
    <p><a href="BorrarCookie.php">Borrar cookie de titular</a></p>
    <p>Refresca la página para ver el titular guardado en la cookie.</p>
</body>
</html>