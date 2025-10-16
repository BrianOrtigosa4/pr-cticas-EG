<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h3>Analizar los siguientes segmentos de código indicando en qué sección del documento HTML
se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos
(nombre y valor), aclarando si es obligatorio.</h3>
<ol>
        <p><b>" <  ! - Código controlado el día 12/08/2009"</b></p>
        <li value = 1>En que lugar se coloca?
        <ul>
            <li>Se puede colocar en cualquier parte del documento HTML.</li>
        </ul></li>
        <li>Efecto que produce:
        <ul>
            <li>No afecta la visualización, porque es un comentario.</li>
        </ul></li>
        <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: < ! - ... -> → delimitador de comentario.</li>
            <li>Contenido: "Código controlado el día 12/08/2009".</li>
            <li>No tiene atributos.</li>
            <li>Obligatorio: el cierre -> es obligatorio para que el comentario sea válido.</li>
        </ul></li>
</ol>

<ol>
    <p><b>"div id='bloque1'>Contenido del bloque1 /div>"</b></p>
    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección <body>, ya que representa contenido visible.</li>
        </ul>
    </li>
    <li>Efecto que produce:
        <ul>
            <li>Crea un bloque contenedor que agrupa contenido.</li>
            <li>Muestra el texto "Contenido del bloque1".</li>
            <li>El atributo id permite identificar el bloque para CSS o JavaScript.</li>
        </ul>
    </li>
    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: &lt;div&gt; (obligatoria apertura y cierre).</li>
            <li>Atributo: <code>id="bloque1"</code> → valor: "bloque1".</li>
            <li>Contenido: "Contenido del bloque1".</li>
            <li>Obligatorios: las etiquetas de apertura y cierre &lt;div&gt; son obligatorias. El atributo id no es obligatorio.</li>
        </ul>
    </li>
</ol>

<ol>
    <p><b>"img src='' alt='lugar imagen' id='im1' name='im1' width='32' height='32' longdesc='detalles.htm' /"</b></p>
    
    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección body, ya que es un elemento de contenido visible.</li>
        </ul>
    </li>
    
    <li>Efecto que produce:
        <ul>
            <li>Inserta una imagen en la página web.</li>
            <li>Si no se encuentra la imagen, se muestra el texto alternativo "lugar imagen".</li>
            <li>El atributo longdesc puede enlazar a una página con más detalles de la imagen.</li>
        </ul>
    </li>
    
    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: img / (etiqueta vacía, no lleva cierre).</li>
            <li>Atributo: src="" → valor: ruta de la imagen (obligatorio).</li>
            <li>Atributo: alt="lugar imagen" → texto alternativo (obligatorio por accesibilidad).</li>
            <li>Atributo: id="im1" → identificador único (opcional).</li>
            <li>Atributo: name="im1" → nombre de la imagen (opcional, más usado en HTML antiguos).</li>
            <li>Atributo: width="32" → ancho en píxeles (opcional).</li>
            <li>Atributo: height="32" → alto en píxeles (opcional).</li>
            <li>Atributo: longdesc="detalles.htm" → enlace a descripción larga (opcional y en desuso en HTML5).</li>
            <li>Obligatorios: etiqueta img, atributo src y atributo alt.</li>
        </ul>
    </li>
</ol>

<ol>
    <p><b>"meta name="keywords" lang="es" content="casa, compra, venta, alquiler""</b></p>

    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección head, ya que son metadatos del documento.</li>
        </ul>
    </li>

    <li>Efecto que produce:
        <ul>
            <li>Proporciona palabras clave (keywords) para buscadores y organización del contenido.</li>
        </ul>
    </li>

    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: meta (etiqueta vacía, no lleva cierre).</li>
            <li>Atributo: name="keywords" → valor: keywords (obligatorio en este caso).</li>
            <li>Atributo: lang="es" → idioma del contenido (opcional).</li>
            <li>Atributo: content="casa, compra, venta, alquiler" → lista de palabras clave (obligatorio cuando se usa name).</li>
            <li>Obligatorios: etiqueta meta, atributos name y content.</li>
        </ul>
    </li>
</ol>

<ol>
    <p><b>"meta http-equiv="expires" content="16-Sep-2019 7:49 PM""</b></p>

    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección head, ya que son metadatos del documento.</li>
        </ul>
    </li>

    <li>Efecto que produce:
        <ul>
            <li>Indica la fecha y hora de expiración de la página para control de caché en navegadores.</li>
        </ul>
    </li>

    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: meta (etiqueta vacía, no lleva cierre).</li>
            <li>Atributo: http-equiv="expires" → valor: expires (obligatorio en este caso).</li>
            <li>Atributo: content="16-Sep-2019 7:49 PM" → fecha de expiración (obligatorio cuando se usa http-equiv).</li>
            <li>Obligatorios: etiqueta meta, atributos http-equiv y content.</li>
        </ul>
    </li>
</ol>


<ol>
    <p><b>"a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help" Resumen HTML /a"</b></p>

    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección body, ya que representa contenido visible e interactivo.</li>
        </ul>
    </li>

    <li>Efecto que produce:
        <ul>
            <li>Crea un hipervínculo con el texto "Resumen HTML".</li>
            <li>Al hacer clic, lleva al recurso indicado en el atributo href.</li>
        </ul>
    </li>

    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta: a (requiere apertura y cierre).</li>
            <li>Atributo: href="http://www.e-style.com.ar/resumen.html" → dirección del recurso (obligatorio).</li>
            <li>Atributo: type="text/html" → tipo de contenido esperado (opcional).</li>
            <li>Atributo: hreflang="es" → idioma del recurso enlazado (opcional).</li>
            <li>Atributo: charset="utf-8" → codificación del recurso enlazado (opcional).</li>
            <li>Atributo: rel="help" → relación del enlace con el documento (opcional).</li>
            <li>Contenido: "Resumen HTML".</li>
            <li>Obligatorios: etiqueta a (apertura y cierre) y el atributo href.</li>
        </ul>
    </li>
</ol>

<ol>
    <p><b>"table width="200" summary="Datos correspondientes al ejercicio vencido" … /table"</b></p>

    <li value="1">¿En qué lugar se coloca?
        <ul>
            <li>Dentro de la sección body, ya que representa contenido visible.</li>
        </ul>
    </li>

    <li>Efecto que produce:
        <ul>
            <li>Crea una tabla con un ancho de 200 píxeles.</li>
            <li>El atributo summary describe el propósito de la tabla (usado en accesibilidad, ya obsoleto en HTML5).</li>
            <li>El caption muestra el título de la tabla en la parte superior.</li>
        </ul>
    </li>

    <li>Elementos, etiquetas y atributos:
        <ul>
            <li>Etiqueta principal: table (requiere apertura y cierre).</li>
            <li>Atributo: width="200" → ancho de la tabla en píxeles (opcional, hoy se recomienda CSS).</li>
            <li>Atributo: summary="Datos correspondientes al ejercicio vencido" → descripción de la tabla (opcional, obsoleto en HTML5).</li>
            <li>Etiqueta: caption → título de la tabla, atributo align="top" indica posición (opcional, obsoleto en HTML5).</li>
            <li>Etiqueta: tr → fila de la tabla.</li>
            <li>Etiqueta: th → celda de encabezado.  
                - scope="col" → encabezado de columna.  
                - scope="row" → encabezado de fila.  
            </li>
            <li>Etiqueta: td → celda de datos.</li>
            <li>Contenido: &nbsp; (espacio en blanco no separable).</li>
            <li>Obligatorios: etiquetas table, tr, td o th. Los atributos width, summary, align y scope son opcionales.</li>
        </ul>
    </li>
</ol>



    </body>
</html>