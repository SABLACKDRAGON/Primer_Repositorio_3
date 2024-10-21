<?php

$dia=date("d");
$fecha=date("d,m,y");

echo "La paguina solo esta activa los primeros 10 dias del mes $fecha </p>";
if ($dia<=10) {
	echo " Sitio activo";
}
else {
	echo "Sitio no activo";
}

?>