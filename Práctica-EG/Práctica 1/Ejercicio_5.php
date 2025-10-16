<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejemplo con marcos</title>
</head>

<frameset rows="80,*,50">

    <frameset cols="150,*">
        <frame srcdoc='
            <html>
            <body style="text-align:center;">
                <img src="\Práctica-EG\img\Logo.jpg" alt="Logo">
            </body>
            </html>' name="logo">
        <frame srcdoc='
            <html>
            <body style="text-align:center;">
                <h1>Encabezado de la empresa</h1>
            </body>
            </html>' name="encabezado">
    </frameset>

    <frameset cols="200,*">
        <frame srcdoc='
            <html>
            <body>
                <h3>Menú Principal</h3>
                <ul>
                    <li><a href="articulos" target="principal">Artículos</a></li>
                    <li><a href="masinfo" target="principal">Más información</a></li>
                </ul>
            </body>
            </html>' name="menu">

        <frame srcdoc='
            <html>
            <body style="font-family:Arial;">
                <h2>Bienvenido al área principal</h2>
                <p>Seleccione una opción del menú para ver la información.</p>
            </body>
            </html>' name="principal">
    </frameset>

    <!-- Pie -->
    <frame srcdoc='
        <html>
        <body style="text-align:center;">
            <a href="articulos" target="principal">Artículos</a> |
            <a href="masinfo" target="principal">Más información</a>
        </body>
        </html>' name="pie">
</frameset>

</html>

