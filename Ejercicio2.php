<?php  

//Dado un arreglo con 20 edades de personas, determinar cuántos son niños, jóvenes, adultos y viejos. Se determinan las categorías con base en la siguiente tabla: 
//CATEGORIA EDAD 
//Niños 0 – 13 
//Jóvenes 13 – 29 
//Adultos 30 – 59 
//Viejos 60 en adelante


// Definir el arreglo con las edades de las personas  
$edades = [8, 12, 17, 19, 35, 78, 43, 27, 57, 24, 49, 69, 71, 15, 28, 33, 44, 52, 81, 6];  

// Inicializar contadores para cada categoría  
$ninhos = 0;   // Contador para niños  
$jovenes = 0;  // Contador para jóvenes  
$adultos = 0;  // Contador para adultos  
$viejos = 0;   // Contador para viejos  

// Contar en qué categoría cae cada edad  
foreach ($edades as $edad) {  
    if ($edad >= 0 && $edad <= 13) {  
        $ninhos++; // Cuenta como niño  
    } elseif ($edad > 13 && $edad <= 29) {  
        $jovenes++; // Cuenta como joven  
    } elseif ($edad >= 30 && $edad <= 59) {  
        $adultos++; // Cuenta como adulto  
    } else {  
        $viejos++; // Cuenta como viejo  
    }  
}  

// Imprimir resultados  
echo "Cantidad de niños: $ninhos" . PHP_EOL;  
echo "Cantidad de jóvenes: $jovenes" . PHP_EOL;  
echo "Cantidad de adultos: $adultos" . PHP_EOL;  
echo "Cantidad de viejos: $viejos" . PHP_EOL;  
?> 