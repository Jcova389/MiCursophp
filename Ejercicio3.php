<?php  
// Definimos un arreglo con 20 calificaciones  
$calificaciones = [85, 90, 78, 65, 72, 88, 54, 90, 73, 66, 80, 59, 92, 69, 75, 77, 60, 81, 88, 50];  

// Inicializamos el contador de reprobados  
$reprobados = 0;  

// Contamos cuántos alumnos reprobados hay  
foreach ($calificaciones as $calificacion) {  
    if ($calificacion < 70) {  
        $reprobados++;  
    }  
}  

// Calculamos el porcentaje de reprobados  
$totalAlumnos = count($calificaciones);  
$porcentajeReprobados = ($reprobados / $totalAlumnos) * 100;  

// Mostramos el resultado  
echo "El porcentaje de reprobados es: " . $porcentajeReprobados . "%\n";  

?> 
