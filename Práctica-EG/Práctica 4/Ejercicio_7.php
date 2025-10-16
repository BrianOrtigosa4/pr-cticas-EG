<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>

<!-- salida por pantalla: bar1 -->

<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>

<!-- salida por pantalla: 5942 -->

<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>

<!-- salida por pantalla: No muestra nada ya que nunca se mustra con el comando echo.
 Además la matriz deja de estar definida gracias al comando unset($matriz) -->