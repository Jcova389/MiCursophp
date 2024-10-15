<?php  

// Cantidad de dinero que tiene el INFLUENCER  
$dineroInfluencer = 1000; // Puedes cambiar esto por cualquier cantidad inicial  
$numeroPersonas = 0;  

function generarEdadAleatoria() {  
    return rand(1, 100); // Genera una edad entre 1 y 100  
}  

while (true) {  
    // Genera edad aleatoria  
    $edad = generarEdadAleatoria();  
    
    // Calcula la cantidad que se le dará a la persona  
    $cantidadAEntregar = $edad * 10; // Proporcional a la edad, multiplicando por 10 (por ejemplo, 17 años -> 170 €)  

    // Verificamos si hay suficiente dinero para dárselo a esta persona  
    if ($dineroInfluencer >= $cantidadAEntregar) {  
        $dineroInfluencer -= $cantidadAEntregar; // Reparte el dinero  
        $numeroPersonas++; // Aumenta el contador de personas  
    } else {  
        // No hay suficiente dinero para esta persona  
        break; // Salimos del bucle  
    }  
}  

// Resultados  
echo "Número de personas que recibieron dinero: $numeroPersonas\n";  
echo "Dinero restante para el INFLUENCER: €$dineroInfluencer\n";  

?>