<?php  

/*Una compañía de seguros esta abriendo un departamento de finanzas y estableció un programa para
captar clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que Bs.
50.000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que Bs. 50.000 la cuota a pagar
será el 2% del monto. La afianzadora desea determinar cual será la cuota que debe pagar un cliente. 
*/



// Función para calcular la cuota de la fianza  
function calcularCuota($monto) {  
    if ($monto < 50000) {  
        $cuota = $monto * 0.03; // 3% del monto si es menor que Bs. 50.000  
    } else {  
        $cuota = $monto * 0.02; // 2% del monto si es mayor o igual a Bs. 50.000  
    }  
    
    return $cuota;  
}  

// Ejemplo de uso  
$montoFianza = 60000; // Cambia este valor según el monto de la fianza del cliente  

$cuotaAPagar = calcularCuota($montoFianza);  

echo "La cuota a pagar por una fianza de BsF $montoFianza es: BsF $cuotaAPagar";  
?>  