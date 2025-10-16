<?php
$a = array( 'color' => 'rojo',
 'sabor' => 'dulce',
 'forma' => 'redonda',
 'nombre' => 'manzana',
 4
 );
echo $a['color'], $a['sabor'], $a['forma'], $a['nombre'], $a[0];
?> 


 <?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
echo $a['color'], $a['sabor'], $a['forma'], $a['nombre'], $a[0];
?>

<!-- Si, son equivalentes -->