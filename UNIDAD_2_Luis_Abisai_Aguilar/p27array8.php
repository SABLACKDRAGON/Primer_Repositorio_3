<?php
$numeros = array();

for ($i=1; $i <=100 ; $i++) { 
	$numeros[]=$i;}



foreach ($numeros as $valor) {
	if ($valor % 2 ==0) {
		echo "$valor <br>";
		// code...
	}
	foreach ($numeros as $valor) {
	if ($valor % 2 >= 1) {
		echo "$valor <br>";
		// code...
	}
}

?>