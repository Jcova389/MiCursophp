<?php

   
   //arreglo asociativo en PHP
   $producto =[
        "cod"=>"123",
        "descripcion"=> "Lapiz",
        "precio"=>1.5 ,
   ];

    echo "acceder al codigo del producto unicamente". '<br>';
    echo $producto["cod"]. '<br>';
    echo 'con vardump'. '<br>';  
    var_dump($producto);
    echo '<br>', 'con print_r'. '<br>'; 
    print_r($producto);
    echo '<br>'; 
    
    echo '<br>';    
   foreach ($producto as $clave =>  $valor) {
    echo "La clave es: $clave y el valor es: $valor <br>";

    }

    

    
    
    
    
?>