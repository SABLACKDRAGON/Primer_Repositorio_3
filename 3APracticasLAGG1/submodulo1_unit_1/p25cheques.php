<?php

$Cantidad = 58161;

$Mil = floor($Cantidad/1000);

$Cantidad = $Cantidad%1000 ;
echo "$Mil Billetes de Mil </p>";



$Quin = floor($Cantidad/500);

$Cantidad = $Cantidad%500 ;
echo "$Quin Billetes de Quinientos </p>";

$Doce = floor($Cantidad/200);

$Cantidad = $Cantidad%200 ;
echo "$Doce Billetes de Docientos </p>";

$cien = floor($Cantidad/100);

$Cantidad = $Cantidad%100 ;
echo "$cien Billetes de Cien </p>";

$cin50 = floor($Cantidad/50);

$Cantidad = $Cantidad%50 ;
echo "$cin50 Billetes de cincuenta </p>";

$vein = floor($Cantidad/20);

$Cantidad = $Cantidad%20 ;
echo "$vein Billetes / moneda de Veinte pesos </p>";


$Diez = floor($Cantidad/10);

$Cantidad = $Cantidad%10 ;
echo "$Diez Monedas de Diez pesos </p>";


$cinco = floor($Cantidad/5);

$Cantidad = $Cantidad%5 ;
echo "$cinco Monedas de Cinco pesos </p>";



$dos = floor($Cantidad/2);

$Cantidad = $Cantidad%2 ;
echo "$dos Monedas de Dos pesos </p>";


$uno = floor($Cantidad/1);

$Cantidad = $Cantidad%1 ;
echo "$uno Monedas de un pesos pesos </p>";







?>