<?php
$nombre = "Abisai";
$semestre= "3A PROGRAMACION";
$cal1 = 8;
$cal2 =9;
$cal3 = 5;
$calfin = $cal1 + $cal2 + $cal3 ;
$calfin = $calfin / 3;



if ($calfin>=6) {
	echo" Hola $nombre eres de $semestre y tu promedio fue de $calfin has Aprovado la materia";
}
else{ echo "Hola $nombre eres de $semestre y tu promedio fue de $calfin no has Aprovado la materia lo siento mucho :(";}
?>


