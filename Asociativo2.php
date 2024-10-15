<?php

   //recorrido de Diccionario de varios registros
   $usuarios = [
        "juanpe" => 
        [
        "nombre" => "Juan",
        "apellido" => "Pérez",
        "deuda" => 30
        ],
        "mariaga" =>
        [
        "nombre" => "María",
        "apellido" => "García",
        "deuda" => 25
        ],
        "pedroro" =>
        [
        "nombre" => "Pedro",
        "apellido" => "Rodriguez",
        "deuda" => 23
        ]
];
$suma=0;
echo " nombre del primer usuario <br>";
echo $usuarios["juanpe"]["nombre"];
echo "<br>";

foreach ($usuarios as $clave => $ClaveUsuario) {
    echo "Usuario: " .$clave . "<br>";
    foreach ($ClaveUsuario as $campo => $valor) {
        echo "$campo: $valor <br>";
        
    }
    $suma=$suma + $ClaveUsuario["deuda"];
    echo "<br>";
}

   
  echo "la suma es <br>", $suma;  
    
    
?>