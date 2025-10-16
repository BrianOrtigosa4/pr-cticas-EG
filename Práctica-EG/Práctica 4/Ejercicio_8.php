<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>

<!-- salida por pantalla: Has entrado en esta pagina a las 16 horas, con 30 minutos y 15 segundos, del 5/7/2025 
 (la hora, minutos, segundos y fecha varia según el momento en que se ejecute) -->

<?php
function sumar($sumando1,$sumando2){
 $suma=$sumando1+$sumando2;
 echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>

<!-- salida por pantalla: 5+6=11 -->