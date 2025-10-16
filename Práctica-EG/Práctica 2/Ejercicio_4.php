<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <style>
        * {color:green; }
        a:link {color:blue }
        a:visited{color:blue }
        a:hover {color:fuchsia }
        a:active {color:red }
        p {
            font-family: arial,helvetica;
            font-size: 10px;
            color:black; }
        .contenido{
            font-size: 14px;
            font-weight: bold;
            color:purple; }
    </style>
</head>
<body>
    <p class="contenido" style="font-weight: normal;">
    Este es un texto ...............</p>
    <table>
    <tr>
    <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
    <td><a href="http://www.google.com.ar">con un
    enlace</a></td>
    </tr>
    </table>
</body>
<!-- Le aplica a todos los elementos el color verde
     Le aplica a los enlaces en estado normal y visitado el color azul
     Le aplica a los enlaces en estado hover el color fucsia
     Le aplica a los enlaces en estado active el color rojo
     Le aplica a los párrafos la fuente arial o helvética, tamaño 10px -->

<body class="contenido">
<p> Este es un texto................</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con
un enlace</a></td>
</tr>
</table>
</body>
<!-- Le aplica a los elementos de clase "contenido" un tamaño de letra de 14px, negrita y color púrpura
    Al párrafo le aplica el estilo que definimos para los párrafos y no le aplica lo que definimos para
    las clase. -->
</html>    