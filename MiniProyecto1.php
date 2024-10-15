<?php  
// Función para generar una matriz de 5x5 con números aleatorios  
function generarMatriz() {  
    $numeros = range(1, 25);  
    shuffle($numeros); // Mezclar los números  
    return array_chunk($numeros, 5); // Dividir en matriz 5x5  
}  

// Función para mostrar la matriz en forma de tabla HTML  
function mostrarMatriz($matriz) {  
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";  
    foreach ($matriz as $fila) {  
        echo "<tr>";  
        foreach ($fila as $valor) {  
            echo "<td style='width: 40px; height: 40px;'>$valor</td>";  
        }  
        echo "</tr>";  
    }  
    echo "</table>";  
}  

// Función para marcar los números en la matriz  
function marcarNumero(&$matriz, $numero) {  
    foreach ($matriz as &$fila) {  
        foreach ($fila as &$valor) {  
            if ($valor === $numero) {  
                $valor = 'X'; // Marcamos el número reemplazándolo por 'X'  
                return true; // Retornamos true si se encontró y marcó el número  
            }  
        }  
    }  
    return false; // Retornamos false si no se encontró el número  
}  

// Inicializar la matriz y objetivos  
session_start(); // Iniciar la sesión  
if (!isset($_SESSION['matriz'])) {  
    $_SESSION['matriz'] = generarMatriz(); // Crear la matriz en la sesión  
    $_SESSION['marcados'] = 0; // Inicializar contadores de aciertos  
}  

// Función principal  
function jugar() {  
    $matriz = $_SESSION['matriz'];  
    $marcados = $_SESSION['marcados'];  
    $aciertosObjetivo = 5; // Definir un objetivo fijo de aciertos  

    echo "<h3>Matriz de juego:</h3>";  
    mostrarMatriz($matriz);  

    while ($marcados < $aciertosObjetivo) {  
        $numeroIngresado = intval(readline("Introduce un número (1-25) para marcar: "));  

        if ($numeroIngresado < 1 || $numeroIngresado > 25) {  
            echo "Número no válido. Debe estar entre 1 y 25.\n";  
            continue; // Volver al inicio del ciclo  
        }  

        if (marcarNumero($matriz, $numeroIngresado)) {  
            $marcados++;  
            $_SESSION['marcados'] = $marcados; // Actualizar contador de aciertos en sesión  
            echo "¡Número $numeroIngresado marcado! Total de aciertos: $marcados\n";  
        } else {  
            echo "Número $numeroIngresado no está en la matriz.\n";  
        }  

        // Mostrar la matriz actualizada  
        mostrarMatriz($matriz);  
    }  

    echo "<h3>¡Se alcanzó el objetivo de $aciertosObjetivo aciertos!</h3>";  
    // Terminar la sesión una vez que se alcanzó el objetivo  
    session_destroy();  
}  

// Ejecutar el juego  
jugar();  
?>  