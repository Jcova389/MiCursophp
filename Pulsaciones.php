<?php
/* Calcular el número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio
aeróbico; la formula que se aplica cuando el sexo es femenino es: • número pulsaciones = (220 - edad) /
10 y si el sexo es masculino: • número pulsaciones = (210 - edad) / 10.
*/

// Función para calcular el número de pulsaciones  
function calcularPulsaciones($edad, $sexo) {  
    if (strtolower($sexo) === 'femenino') {  
        $pulsaciones = (220 - $edad) / 10; // Fórmula para mujeres  
    } elseif (strtolower($sexo) === 'masculino') {  
        $pulsaciones = (210 - $edad) / 10; // Fórmula para hombres  
    } else {  
        return "Sexo no válido. Utiliza 'masculino' o 'femenino'.";  
    }  

    return $pulsaciones;  
}  

// Ejemplo de uso  
$edad = 25; // Cambia este valor a la edad de la persona  
$sexo = 'femenino'; // Cambia esto a 'masculino' o 'femenino' según sea necesario  

$pulsacionesPor10Segundos = calcularPulsaciones($edad, $sexo);  

if (is_numeric($pulsacionesPor10Segundos)) {  
    echo "Número de pulsaciones por cada 10 segundos de ejercicio: $pulsacionesPor10Segundos";  
} else {  
    echo $pulsacionesPor10Segundos; // Mensaje de error  
}  
?>  