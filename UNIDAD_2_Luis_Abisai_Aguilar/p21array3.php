<?php

$arraynombres = array("juan","pedro","Neftali","Erick","Citlaly");

//se obtiene el numero de elementos
$contenidonombres = count($arraynombres);

// recorre todos los elementos
for($i=0; $i<$contenidonombres; $i++)
{//se pntiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
}

?>