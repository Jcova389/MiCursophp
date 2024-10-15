<?php  

/*Calcular el total que una persona debe pagar en una cauchera, si el precio de cada caucho es de BsF 800
si se compran menos de 5 cauchos y de Bs. 700 si se compran 5 o más.*/

// Definir el precio de los cauchos  
$precioCauchoMenos5 = 800; // Precio para menos de 5 cauchos  
$precioCaucho5OMas = 700;   // Precio para 5 o más cauchos  

// Función para calcular el total a pagar  
function calcularTotal($cantidad) {  
    global $precioCauchoMenos5, $precioCaucho5OMas;  
    
    if ($cantidad < 5) {  
        $total = $cantidad * $precioCauchoMenos5;  
    } else {  
        $total = $cantidad * $precioCaucho5OMas;  
    }  
    
    return $total;  
}  

// Ejemplo de uso  
$cantidadCauchos = 6; // Cambia este valor según la cantidad de cauchos que compra la persona  
$totalAPagar = calcularTotal($cantidadCauchos);  

echo "Total a pagar por $cantidadCauchos cauchos: BsF $totalAPagar";  
?>

