<?php

/* cbtis 89
programa que sume, multipliqacion, divida y reste dos numeros enteros
Luis Abisai Aguilar Gracia
MTR Veronica Martinez Anaya
3Aprogramacion TM */

$N1; $N2; $Suma; $resta;$multi;$divi; // declarar variables

$N1 = 50; // asignar valor 1
$N2 = 20; // asignar valor 2
$Suma = $N1 + $N2; // se realiza operacion aritmetica
$resta  = $N1 - $N2;
$multi  = $N1 * $N2;
$divi  = $N1 / $N2;

// mensajes de numeros y suma
echo "Empesemos con las operaciones </p> "; 
echo "Tu Primer numero es $N1 </p> ";
echo "Tu Segundo numero es $N2 </p> ";
echo "Resultado de Suma $Suma </p> ";
echo "Resultado de Resta $resta </p> ";
echo "Resultado de Divicion $divi </p> ";
echo "Resultado de Multiplicación $multi </p> ";
?>