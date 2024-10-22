

<?php
/* programa que genera atravez de un for una invitacion para el cumoleaños de alguien los datos utilizados de un arreglo 
Luis Abisai Aguilar Gracia 3AProgramación TM */
$arraycumple = array(
    "cesar" => "10,03",
    "santi" => "27,05",
    "abisai" => "30,03",
    "karime" => "22,10"
);
$año = date("Y");
$DIA = date("d,m"); // Formato de fecha
$conteo = count($arraycumple);

// Felicitación para el cumpleañero
foreach ($arraycumple as $nombre => $fecha) {
    if ($DIA == $fecha) {
    	$festejado = $nombre;
        echo "¡Feliz cumpleaños $nombre!</p>
         que te la pases muy padre este día tan bonito ♥ </p> te deseo lo mejor del mundo el día de hoy y que</p> te la pases bien padre. ¡Fuerte abrazo de </p> parte de todos tus amigos! </p>";
    }
}

// Invitación para los demás
for ($i = 0; $i < $conteo; $i++) {
   
    $nombre = $arraycumple[$i];
    
    // Solo invitamos si no es el cumpleañero
    if ($DIA != $arraycumple[$nombre]) {
        echo " <br>Hola $nombre, estas cordealmente invitado a la fiesta de cumpleaños de $festejado el día $DIA,$año. </P>¡No faltes! Te esperamos sin falta en </p> su casa a las 8 de la noche la fiesta va a </p> continuar hasta las 4 de la mañana </p> ¡No faltes! :) ♥♥♥</p>";
    }
    $i++;
}
?>
