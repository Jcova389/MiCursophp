<?php  

//Dado 20 números en un arreglo, imprimir cuantos son positivos, cuantos negativos y cuantos neutros

// Definir el arreglo con los 20 números proporcionados  
$numeros = [-8, 15, 4, -12, 45, 67, 29, -2, 44, 79, 24, -7, -24, 32, -56, 53, 63, -20, 32, -9];  

// Inicializar contadores  
$positivos = 0;  
$negativos = 0;  
$neutros = 0;  

// Contar positivos, negativos y neutros  
foreach ($numeros as $numero) {  
    if ($numero > 0) {  
        $positivos++;  
    } elseif ($numero < 0) {  
        $negativos++;  
    } else {  
        $neutros++;  
    }  
}  

// Imprimir resultados  
echo "Cantidad de positivos: $positivos" . PHP_EOL;  
echo "Cantidad de negativos: $negativos" . PHP_EOL;  
echo "Cantidad de neutros: $neutros" . PHP_EOL;  
?>  
