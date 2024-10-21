<?php 

$art1= 66;
$art2= 50;
$art3= 10;
$venta = $art1 + $art2 + $art3;
$des = 0;
$tot = 0;




echo " Precio del primer  articulo: $art1 </p> Precio del segundo   articulo: $art2  </p>  Precio del tercer aticulo: $art3 </p> su subtotal es de $venta";






if ($venta<= 1000) {
	$des= $venta * 0.05;
	$tot= $des - $venta ;

	echo " tu subtotal es de $venta pero tienes un  descuento es de 5% por lo que tu total a pagar es de $tot teniendo un descuento de $des"; 
}
else{
	if ($venta<= 2500) {
	$des= $venta * 0.10;
	$tot= $des - $venta ;

	echo " tu subtotal es de $venta pero tienes un  descuento es de 10% por lo que tu total a pagar es de $tot teniendo un descuento de $des"; 

}
else { 

	$des= $venta * 0.20;
	$tot= $des - $venta ;

	echo " tu subtotal es de $venta pero tienes un  descuento es de 20% por lo que tu total a pagar es de $tot teniendo un descuento de $des";  
}
	# code...
}


?>