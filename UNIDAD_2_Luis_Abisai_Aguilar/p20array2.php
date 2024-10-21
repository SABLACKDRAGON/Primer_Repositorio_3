<?php
$nombre = "anna";
$array = array(1,2,3,"casa",$nombre);

//se obtiene el numero de elementos
$longud = count($array);

// recorre todos los elementos
for($i=0; $i<$longud; $i++)
{//se pntiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?>