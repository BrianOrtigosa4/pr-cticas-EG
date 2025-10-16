<html>
<head><title>Documento 1</title></head>
<body>
<?php
$destinatario = "xx@xx.com";
$asunto = "Prueba de envío de correo HTML";

$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
 <h1>¡Hola!</h1>
 <p>
  <b>Esto es una prueba</b>.<br>
  xxxxxxxxxxxxxxxxxxxxxxxxxxx
 </p>
</body>
</html>
';

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Pruebas <noreply@tusitio.com>\r\n";
$headers .= "Reply-To: noreply@tusitio.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
</body>
</html>
