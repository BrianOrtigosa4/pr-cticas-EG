<?php
function doble($i) { // Función que devuelve el doble del valor pasado como parámetro
 return $i*2;
}
$a = TRUE; // Variable de tipo boolean
$b = "xyz"; // Variable de tipo string
$c = 'xyz'; // Variable de tipo string
$d = 12; // Variable de tipo integer
echo gettype($a); // Muestra el tipo de variable
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) { // Comprueba si la variable es de tipo integer
 $d += 4;
}
if (is_string($a)) { // Comprueba si la variable es de tipo string
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3; // Operador ternario
$f = doble($d++); // Llamada a la función y le pasa el valor de la variable incrementada
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g; // Muestra el valor de las variables
?>

<!--salida por pantalla: booleanstringstringinteger1xyzxyz184444