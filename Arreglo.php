<?php
// $arreglo = array("Maria", "Pedro", "Jose");
$arreglo = array(12,15,18,20,5);
var_dump($arreglo);
$suma =0;

foreach ($arreglo as $x) {
    $suma += $x;
    
}
echo "La suma de los numeros es: " . $suma;
// echo "La suma de los numeros es: " , array_sum($arreglo

?>