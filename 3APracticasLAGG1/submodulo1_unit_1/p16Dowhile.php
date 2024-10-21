<?php
/*
CBTIS89
PROGRAMA QUE HACE LA TABLA DEL 9
Luis Abisai Aguilar Gracia
3AProgramacion TM

*/

$multi= 9;
$Limite = 10;
$inicio =1;
echo" Tabla del 9 <br>";
do {
$Resultado = $multi * $inicio;
	echo " $multi x $inicio=$Resultado <br>"; 
	
$inicio ++;


} while ($inicio <= $Limite);


?>