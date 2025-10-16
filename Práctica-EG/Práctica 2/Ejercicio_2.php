<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo CSS</title>
  <style>
    p#normal {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 11px;
      font-weight: bold;
    }
    
    #destacado {
      border-style: solid;
      border-color: blue;
      border-width: 2px;
    }

    #distinto {
      background-color: #9EC7EB;
      color: red;
    }
  </style>
</head>
<body>
  <p id="normal">Este es un párrafo</p>
  <p id="destacado">Este es otro párrafo</p>
  <table id="destacado">
    <tr><td>Esta es una tabla</td></tr>
  </table>
  <p id="distinto">Este es el último párrafo</p>
</body>
</html>

<!--  Le asigna una fuente, un tamaño y un estilo a los párrafos con id "normal"
    Le asigna un borde a los elementos con id "destacado"
    Le asigna un color de fondo y un color de fuente a los párrafos con id "distinto"  -->