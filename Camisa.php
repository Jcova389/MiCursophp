<?php  

/*Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o
mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un
descuento del 10%*/


// Definir el precio por camisa  
$precioPorCamisa = 500; // Cambia este valor según el precio real de la camisa  

// Función para calcular el total a pagar  
function calcularTotal($cantidadCamisas) {  
    global $precioPorCamisa;  
    $totalCompra = $cantidadCamisas * $precioPorCamisa; // Cálculo total sin descuento  

    // Aplicar descuento según la cantidad  
    if ($cantidadCamisas >= 3) {  
        $descuento = 0.20; // 20% de descuento  
    } else {  
        $descuento = 0.10; // 10% de descuento  
    }  

    $totalConDescuento = $totalCompra * (1 - $descuento); // Aplicar el descuento  
    return $totalConDescuento;  
}  

// Ejemplo de uso  
$cantidadCamisas = 4; // Cambia este valor según la cantidad de camisas que compra el cliente  

$totalAPagar = calcularTotal($cantidadCamisas);  

echo "El total a pagar por $cantidadCamisas camisas es: BsF $totalAPagar";  
?>  