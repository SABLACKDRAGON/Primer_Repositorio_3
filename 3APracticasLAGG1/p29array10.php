<?php

$arraynombres = array("Ratoncito Perez", "Julio Regalado","Pepsi Man","spiter man","juan pedro de la mari mar","patito juan", "Abisai","josejose");

$nombre= "josejose";
$cuenta = count($arraynombres);
for ($i=0; $i <= $cuenta ; $i++) { 
	

	if ($arraynombres[$i] == $nombre) {
		echo " El nombre de $arraynombres[$i] si esta en la lista </P>";
	}
	else {
		echo $arraynombres[$i]," no esta en la lista </P>";
	}

}




?>