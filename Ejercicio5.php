
<?php

/*En una empresa se requiere calcular el salario semanal de cada uno de los n obreros que laboran en ella. Los nombres están en un arreglo y Las horas están en otro. (Arreglos paralelas)
El salario se obtiene de la siguiente forma: 
• Si el obrero trabaja 40 horas o menos se le paga Bs. 20 por hora. 
• Si trabaja más de 40 horas se le paga Bs. 20 por cada una de las primeras 40 horas y Bs. 25 por cada hora extra. 
Imprime el nombre de cada trabajador y cuánto va a cobrar */

// Arreglos paralelos: nombres y horas trabajadas  
$nombres = ["Juan", "María", "Pedro", "Luisa", "Carlos"];  
$horasTrabajadas = [35, 45, 40, 50, 30];  

// Inicializamos un arreglo para almacenar los salarios  
$salarios = [];  

// Calculamos el salario de cada obrero  
foreach ($nombres as $indice => $nombre) {  
    $horas = $horasTrabajadas[$indice];  
    if ($horas <= 40) {  
        // Se paga Bs. 20 por hora si trabaja 40 horas o menos  
        $salario = $horas * 20;  
    } else {  
        // Se paga Bs. 20 por las primeras 40 horas y Bs. 25 por la hora extra  
        $salario = (40 * 20) + (($horas - 40) * 25);  
    }  
    // Guardamos el salario en el arreglo  
    $salarios[$nombre] = $salario;  
}  

// Imprimimos el nombre de cada trabajador y cuánto va a cobrar  
foreach ($salarios as $nombre => $salario) {  
    echo "El obrero $nombre cobrará Bs. $salario\n";  
}  
?> 