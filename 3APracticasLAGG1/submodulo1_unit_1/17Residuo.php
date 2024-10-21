<?php
echo "numeros aleatorios</p></p>";

for ($i=0; $i <=5 ; $i++) { 
	$valor = rand(1,50);
	$resi = $valor % 2;
echo "EL numero es $valor</P>";
if ($resi==0) {
	echo" El numero es par </p>";
}
else { echo "El numero es impar </P>";}
}


?>