<html>
<head><title>Documento 2</title></head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <p><label>Tu Nombre <input type="text" name="nombre" size="25" required /></label></p>
    <p>Email del amigo al que quieres recomendar la página</p>
    <p><label><input type="email" name="email" size="25" required /></label></p>
    <input type="submit" value="Enviar"/>
</fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $destino = htmlspecialchars($_POST['email']);
    $asunto = "Recomendación de página web";

    $comentario = "
    <html>
    <head><title>Nuevo comentario</title></head>
    <body>
    <p>Hola, soy $nombre</p>
    <p>Y te quiero recomendar esta página web</p>
    <p><href='http://xx.com/'>paginaweb.com</a></p>
    </body>
    </html>
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($destino, $asunto, $comentario, $headers)) {
        echo "<p>Su consulta ha sido enviada correctamente. En breve recibirá una respuesta.</p>";
    } else {
        echo "<p> Ocurrió un error al enviar el mensaje. Intente nuevamente más tarde.</p>";
    }
}
?>
</body>
</html>