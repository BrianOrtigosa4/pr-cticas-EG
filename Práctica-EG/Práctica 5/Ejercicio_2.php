<html>
<head><title>Documento 2</title></head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <p><label>Nombre <input type="text" name="nombre" size="25" required /></label></p>
    <p><label>Email <input type="email" name="email" size="25" required /></label></p>
    <p>Comentario</p>
    <p><textarea name="texto" cols="32" rows="6" required></textarea></p>
    <input type="submit" value="Enviar"/>
</fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $texto = htmlspecialchars($_POST['texto']);

    $fecha = date("d-m-Y");
    $hora  = date("H:i:s");
    $destino = "danyelisabet@gmail.com";
    $asunto = "Comentario enviado desde el sitio web";

    $comentario = "
    <html>
    <head><title>Nuevo comentario</title></head>
    <body>
    <p>Nombre: $nombre</p>
    <p>Email: $email</p>
    <p>Consulta:<br>$texto</p>
    <p>Enviado el $fecha a las $hora</p>
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
