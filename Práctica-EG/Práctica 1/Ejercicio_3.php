<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
<a href="#">Click aquí para ir a Google</a>
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>

<!-- 1. enlace: a href="http://www.google.com.ar
" Click aquí para ir a Google
Visualización: Se muestra un enlace normal con el texto "Click aquí para ir a Google".
Comportamiento: Al hacer clic, abre Google en la misma ventana o pestaña.
Diferencia: Es un enlace estándar, sin atributos adicionales.

2. enlace: a href="http://www.google.com.ar
" target="_blank" Click aquí para ir a Google
Visualización: Igual que el anterior, texto visible normal.
Comportamiento: Al hacer clic, abre Google en una nueva pestaña o ventana.
Diferencia: El atributo target="_blank" provoca la apertura en nueva ventana/pestaña.

3. enlace: a href="http://www.google.com.ar
" type="text/html" hreflang="es" charset="utf-8" rel="help" /a
Visualización: Puede aparecer vacío si no hay texto entre las etiquetas.
Comportamiento: Al hacer clic, abriría Google, pero sin texto visible el usuario no ve el enlace.
Diferencia: Contiene atributos adicionales (tipo de contenido, idioma, codificación, relación) útiles para buscadores o accesibilidad.

4. enlace: a href="#" Click aquí para ir a Google
Visualización: Texto visible como enlace.
Comportamiento: Al hacer clic, no navega a otra página; se queda en la misma página.
Diferencia: href="#" es un enlace vacío, usado generalmente para scripts o navegación interna.

5. enlace: a href="#arriba" Click aquí para volver arriba
Visualización: Texto visible "Click aquí para volver arriba".
Comportamiento: Al hacer clic, lleva al usuario al elemento con name="arriba" o id="arriba".
Diferencia: Enlace interno dentro de la misma página para navegación rápida.

6. ancla: a name="arriba" id="arriba" /a
Visualización: No se muestra nada en la página.
Comportamiento: Permite que otros enlaces (como el anterior) se desplacen hasta este punto.
Diferencia: Es un marcador interno, no un enlace visible.-->

<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>

<!-- 1. Código:
p contiene: imagen seguida de un enlace separado
<img src="im1.jpg" alt="imagen1" />
<a href="http://www.google.com.ar">Click aquí</a>
Visualización: Se ve la imagen y, al lado, un enlace de texto "Click aquí".
Comportamiento: La imagen no es clickeable, solo el enlace de texto abre Google.
Diferencia: Imagen y enlace son elementos independientes.

2. Código:
p contiene: enlace que envuelve la imagen + texto separado
<a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí
Visualización: La imagen es un enlace, y al lado está el texto "Click aquí" que no es clickeable.
Comportamiento: Al hacer clic en la imagen se abre Google; el texto no es interactivo.
Diferencia: Solo la imagen está enlazada, el texto está fuera del enlace.

3. Código:
p contiene: enlace que envuelve imagen + texto
<a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a>
Visualización: La imagen y el texto "Click aquí" están juntos dentro del mismo enlace.
Comportamiento: Al hacer clic en cualquiera de los dos (imagen o texto), se abre Google.
Diferencia: Imagen y texto forman un único enlace, ambos son clickeables.

4. Código:
p contiene: imagen dentro de un enlace + enlace de texto separado
<a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a>
<a href="http://www.google.com.ar">Click aquí</a>
Visualización: Se ve la imagen como enlace y también el texto "Click aquí" como otro enlace, ambos en la misma línea (o en párrafos separados según CSS).
Comportamiento: Ambos elementos son clickeables por separado; cada uno abre Google.
Diferencia: Hay dos enlaces distintos, uno para la imagen y otro para el texto.-->

<ul>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ul>

<ol>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ol>

<ol>
<li>xxx</li>
</ol>
<ol>
<li value="2">yyy</li>
</ol>
<ol>
<li
value="3">zzz</li>
</ol>

<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>

<!-- 1. código:
 Contiene: ul con elementos: xxx, yyy, zzz.
 Visualización: Listado con elementos
 Diferencia: Lista desordenada, sin numeración automática

 2. código:
 Contiene: ol con elementos: xxx,yyy,zzz.
 Visualización: Listado con numeración.
 Diferencia: Lista ordenada con numeración.
 
 3.código:
 Contiene: Tres ol cons sus respectivos elementos a los cuales se le asigna un valor de variable
 Visualización: Listado con numeración.
 Diferencia: Lista ordenada con numeración definida.
 
 4. código:
 Contiene: Lista con elementos: xxx,yyy,zzz.
 Visualización: Listado con numeración.
 Diferencia: Utiliza la notación clockauote, normalmente usado para citar textualmente algo.-->


<table border="1" width="300">
<tr>
<th>Columna 1</th>
<th>Columna 2</th>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>

<table border="1" width="300">
<tr>
<td><div align="center"><strong>Columna1</strong></div></td>
<td><div align="center"><strong>Columna2</strong></div></td>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>

<!--
1.código:
Contiene: Tabla con encabezados (<th>) y celdas de datos (<td>).
Visualización: Tabla simple, encabezados en negrita y centrados automáticamente.
Diferencia: Semánticamente correcta, usa encabezados reales.

2.código:
Contiene: Tabla con todas las celdas como <td>, usando div y strong para formato.
Visualización: Tabla similar a la anterior, apariencia centrada y en negrita.
Diferencia: No usa encabezados reales, formato aplicado manualmente, menos semántica.
-->


<table width="200">
<caption>
Título
</caption>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>

<table width="200">
<tr>
<td colspan="3"><div align="center">Título</div></td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>

<!--
1.código:
Contiene: Tabla con título usando <caption> y celdas con fondo gris.
Visualización: Tabla con título sobre la tabla y filas de celdas grises.
Diferencia: Título semántico real (<caption>), más accesible; alineación automática.

2.código:
Contiene: Tabla con título dentro de una celda combinada (colspan=3) y celdas grises.
Visualización: Tabla con "título" centrado dentro de la primera fila y filas de celdas grises.
Diferencia: No usa <caption>, título es solo formato visual; menos semántico y accesible.
-->

<table width="200">
<tr>
<td colspan="3"><div align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>

<table width="200">
<tr>
<td colspan="3"><div align="center">Título</div></td>
</tr>
<tr>
<td colspan="2" bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>

<!--
1.código:
Contiene: Tabla con título centrado y una celda que ocupa dos filas (rowspan).
Visualización: "Título" en la primera fila, primera columna gris que abarca dos filas, resto de celdas grises normales.
Diferencia: Uso de rowspan para unir filas, estructura más compleja; semántica visual clara.

2.código:
Contiene: Tabla con título centrado y una celda que abarca dos columnas (colspan) en la segunda fila.
Visualización: "Título" centrado, segunda fila con celda gris unida en dos columnas, resto de celdas normales.
Diferencia: Uso de colspan para unir columnas; diseño diferente, menos filas combinadas pero similar efecto visual.
-->

<table width="200" border="1">
<tr>
<td colspan="3"><div align="center">Título</div></td>
</tr>
<tr>
<td colspan="2" rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>

<table width="200" border="1" cellpadding="0" cellspacing="0">
<tr>
<td colspan="2"><div align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>

<!--
1.código:
Contiene: Tabla con título centrado y celda que abarca dos columnas y dos filas (colspan + rowspan).
Visualización: "Título" centrado, segunda fila con gran celda gris unida, tercera fila con celda restante.
Diferencia: Combina rowspan y colspan en la misma celda; estructura más compleja visualmente.

2.código:
Contiene: Tabla con título centrado, celda que abarca dos filas (rowspan) y otra celda normal; usa cellpadding y cellspacing en 0.
Visualización: "Título" centrado, segunda fila con celda gris alta, tercera fila con celda restante.
Diferencia: No combina rowspan y colspan en la misma celda; apariencia similar, estructura ligeramente más simple.
-->

<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>

<form id="form2" name="form2" action="" method="get" target="_blank">
LOGIN<br />
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
<input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>

<form id="form3" name="form3" action="mailto:xx@xx.com" enctype="text/plain" method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu3" name="usu3" /><br />
Clave: <input type="password" id="clave3" name="clave3" />
</fieldset>
<input type="reset" id="boton3" name="boton3" value="Enviar" />
</form>

<!--
1.código:
Contiene: Formulario con método POST, acción a un archivo PHP, usa <fieldset> y <legend>.
Visualización: Campos de usuario y clave dentro de un cuadro con título "LOGIN"; botón Enviar.
Diferencia: Estructura semántica clara, envío a servidor, diseño clásico con fieldset.

2.código:
Contiene: Formulario con método GET, acción vacía, usa <label> para campos.
Visualización: "LOGIN" como texto simple, campos de usuario y clave, botón Enviar.
Diferencia: Menos semántico que el anterior (sin fieldset), envío por GET, diseño más simple.

3.código:
Contiene: Formulario con envío por correo (mailto), usa fieldset y legend; botón tipo reset.
Visualización: Campos de usuario y clave dentro de un cuadro "LOGIN"; botón "Enviar" que limpia el formulario.
Diferencia: No envía a servidor tradicional, botón resetea campos; combinación inusual de diseño y funcionalidad.
-->

<label>Botón 1
<button type="button" name="boton1" id="boton1">
<img src="logo.jpg" alt="Botón con imagen" width="30" height="20" /><br />
<b>CLICK AQUÍ</b>
</button>
</label>

<label>Botón 2
<input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>

<!--
1.código:
Contiene: Botón tipo <button> con imagen y texto en negrita dentro de un <label>.
Visualización: Botón con logo pequeño encima y texto "CLICK AQUÍ" debajo.
Diferencia: Permite contenido HTML dentro del botón (imagen + formato de texto), más flexible visualmente.

2.código:
Contiene: Botón tipo <input> simple con valor de texto.
Visualización: Botón estándar con texto "CLICK AQUÍ".
Diferencia: Menos flexible que <button>; solo permite texto, no HTML ni imágenes dentro.
-->

<p>
<label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion" id="Y" value="Y" />Y</label>
</p>

<p>
<label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label>
</p>

<!--
1.código:
Contiene: Grupo de botones de radio con mismo nombre "opcion" (selección única).
Visualización: Dos opciones "X" y "Y"; solo se puede seleccionar una a la vez.
Diferencia: Uso correcto de nombre compartido para grupo, selección exclusiva.

2.código:
Contiene: Dos botones de radio con nombres distintos ("opcion1" y "opcion2").
Visualización: Dos opciones "X" y "Y"; cada una se selecciona independientemente.
Diferencia: No forman un grupo; se pueden seleccionar ambas al mismo tiempo, comportamiento diferente.
-->

<select name="lista">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>

<select name="lista[]" multiple="multiple">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>

<!--
1.código:
Contiene: Lista desplegable simple con grupos de opciones (<optgroup>).
Visualización: Desplegable donde se puede seleccionar solo un mes; opciones agrupadas por "Caso 1" y "Caso 2".
Diferencia: Selección única, diseño claro por agrupación.

2.código:
Contiene: Lista desplegable múltiple (atributo multiple) con grupos de opciones.
Visualización: Desplegable que permite seleccionar varios meses a la vez; opciones agrupadas.
Diferencia: Permite selección múltiple, comportamiento distinto al primer código.
-->


