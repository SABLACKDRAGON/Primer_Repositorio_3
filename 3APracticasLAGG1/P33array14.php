<?php
$eliminolist=0;
$nombre = "jolio";
$nombre1 = "santi";
$nombre2= "sergio";
$nombre3= "emiliano";
$nombre4= "diego";
$array_nombres=array("maria","jose","pedro","joselito","perez","rogelio");
echo "lista </P>";

foreach($array_nombres as $numeracion){
      echo $numeracion . " <br>"; }

echo "nombres en ascendente <br>";

//orden ascendente
sort($array_nombres);
$conteo=($array_nombres);

for($i=0; $i<$conteo; $i++)
{//se pntiene el valor de cada elemento
echo $array_nombres[$i];
echo "<br>";
}






echo "<br>";

echo "se elimino a <br>", $array_nombres[$eliminolist]  ;
unset($array_nombres[$eliminolist] );

echo "</p> nuevo usuario a la lista bienvenido  $nombre,$nombre1,$nombre2,$nombre3,$nombre4 <br> ";

$array_PUSH($arraynombres,$nombre,$nombre1,$nombre2,$nombre3,$nombre4);

echo "lista en descendente <br>";


//orden descendente
rsort($array_nombres);

for($i=0; $i<$conteo; $i++)
{//se pntiene el valor de cada elemento
echo $array_nombres[$i];
echo "<br>";
}
?>