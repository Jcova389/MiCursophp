<?php  
/*En un club tienen una política de entrada según las edades, realice un programe que lea la edad de una
persona y especifique la política que le corresponde según la misma. Si la edad es menor que 12, “No
puede Ingresar solo”. Si la edad esta entre 12 y 18, “Puede ingresar con su padre que debe ser socio o
solo con previa autorización del padre socio”, Mayor o igual que 18 , “Puede entrar con su respectivo
Carnet o Pase otorgado”*/



// Función para determinar la política de ingreso según la edad  
function politicaIngreso($edad) {  
    if ($edad < 12) {  
        return "No puede ingresar solo.";  
    } elseif ($edad >= 12 && $edad < 18) {  
        return "Puede ingresar con su padre que debe ser socio o solo con previa autorización del padre socio.";  
    } else {  
        return "Puede entrar con su respectivo carnet o pase otorgado.";  
    }  
}  

// Ejemplo de uso  
$edadPersona = 16; // Cambiar este valor según la edad de la persona  

$politica = politicaIngreso($edadPersona);  

echo "Edad: $edadPersona. Política de ingreso: $politica";  
?>