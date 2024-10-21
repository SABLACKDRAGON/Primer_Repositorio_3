<?php
/*
CBTIS89
PROGRAMA QUE HACE LA TABLA DEL 7
Luis Abisai Aguilar Gracia
3AProgramacion TM

*/
$LIMITE = 10;
$multi = 7;
$inicio =1;
echo" Tabla del 7 <br>";
while ($inicio<=$LIMITE) {
	$Resultado = $multi * $inicio;
	echo " $multi x $inicio=$Resultado <br>"; 
	$inicio++;
}

?>