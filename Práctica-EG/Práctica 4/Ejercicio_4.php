<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?> 
<!-- El primer echo no se ejecuta ya que las varibales no están definidas. El segundo echo si se ejecuta ya que las variables están definidas.
El segundo echo muestra: El calvel blanco, ya que consume los datos del archivo 'datos.php' -->

