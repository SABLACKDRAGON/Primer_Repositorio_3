<?php

echo "numeros aleatorios</p></p>";
$sumaImpares=0;
	$sumapares=0;

for ($i=0; $i <=30 ; $i++) { 
	
	$resi = $i % 2;
	
echo "EL numero es $i</P>";

if ($resi==0) {
	echo" El numero es par </p>";
	$sumapares = $sumapares + $i;

}
else{
 	 echo "El numero es impar </P>";}
$sumaImpares = $sumaImpares + $i ;
 } 

echo "La suma de los pares es $sumapares </p>";
echo "La suma de los impares es $sumaImpares </p>";
?>



