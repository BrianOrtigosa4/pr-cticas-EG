<!-- 1. Los textos enfatizados dentro de cualquier título deben ser rojos.
2. Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a
su vez esté dentro de un bloque debe ser color negro.
3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser
amarillo pero si es un enlace a otra página debe ser azul.
4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si
están dentro de un título deben ser rojos.
5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules.
6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta
para los ya visitados y, además, no deben aparecer subrayados.-->

<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <style>
            h1 em, h2 em, h3 em, h4 em, h5 em, h6 em{
                color:red;
            }
            div p a:link{color:blue}
            .ultimo{
                color:yellow;
            }
            a:link{color:blue}

            .importante{
                color:green;
            }
            h1.importante, h2.importante, h3.importante, h4.importante, h5.importante, h6.importante{
                color:red;
            }
            h1[title]{color:blue;}
            ol a:link{color:blue; text-decoration:none;}
            ol a:visited{color:violet; text-decoration:none;}
    </style>
</head>
<body>
    <p>Esto es un <em>párrafo</em></p>
    <h3> Esto es un <em>título h3</em></p>
    <hr style="border: 1px solid black; width: 110%;">
    <div>
        <p>Este es un <a href="algo.html">enlace</a> dentro de un párrafo dentro de un bloque.</p>
    </div>
    <hr style="border: 1px solid black; width: 110%;">
    <div class= ultimo>
        <ul>
            <li>Elemento 1<li>
            <li>Elemento 2 con <a href="algo.html">enlace</a><li>
        </ul>
    </div>
    <hr style="border: 1px solid black; width: 110%;">
    <div>
        <p class="importante"> Este es un párrafo importante</p>
        <h2 class="importante"> Este es un título h2 importante</h2>
    </div>
    <hr style="border: 1px solid black; width: 110%;">
    <h1 title="cualquier cosa"> Este es un título h1 con atributo title</h1>
    <hr style="border: 1px solid black; width: 110%;">
    <ol>
        <li>Enlace no visitado <a href="algo.com">enlace</a></li>
        <li>Enlace visitado <a href="http://www.google.com">enlace</a></li>
    </ol>

</body>
</html>