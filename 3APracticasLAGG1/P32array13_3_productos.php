

<?php // agregar un elemento a un array en 3 posicion//

   $array_ropa= array(1, "camisas", 2, "Pantalon",3,"cinturon");

   

   array_push($array_ropa, 4, "gorra",5,"calcetines");

   foreach($array_ropa as $numeracion){
      echo $numeracion . " <BR>";
    


      
   } 

    echo "Productos ordenados en descendente <br>";
//orden descendente
rsort($array_ropa);
var_export($array_ropa);
?>