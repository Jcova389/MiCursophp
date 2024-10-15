php
<?php  
session_start();  

// Definimos el tamaño de la matriz  
define('TAM', 5);  

// Inicializamos la matriz y los números cantados  
if (!isset($_SESSION['matriz'])) {  
    $matriz = [];  
    for ($i = 0; $i < TAM; $i++) {  
        for ($j = 0; $j < TAM; $j++) {  
            do {  
                $numero = rand(1, 75); // Genera números únicos de 1 a 75  
            } while (in_array($numero, array_merge(...$matriz))); // Asegura que son únicos  
            $matriz[$i][$j] = $numero;  
        }  
    }  
    $_SESSION['matriz'] = $matriz;  
    $_SESSION['cantados'] = [];  
}  

// Función para cantar un número  
function cantarNumero() {  
    return rand(1, 75);  
}  

// Marcamos los números en la matriz  
function marcarNumero(&$matriz, $numero) {  
    foreach ($matriz as &$fila) {  
        foreach ($fila as &$valor) {  
            if ($valor === $numero) {  
                $valor = 'X'; // Marcamos el número  
            }  
        }  
    }  
}  

// Cerrar la sesión si se ha alcanzado el número de aciertos  
function verificarAciertos($matriz, $aciertos) {  
    $totalAciertos = 0;  
    foreach ($matriz as $fila) {  
        foreach ($fila as $valor) {  
            if ($valor === 'X') {  
                $totalAciertos++;  
            }  
        }  
    }  
    return $totalAciertos >= $aciertos;  
}  

// Validar el número de aciertos  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    $aciertos = (int)$_POST['aciertos'];  
    $cantados = $_SESSION['cantados'];  

    // Generamos un número nuevo  
    do {  
        $numeroCantado = cantarNumero();  
    } while (in_array($numeroCantado, $cantados));  

    // Marcar en matriz y agregar a la lista de cantados  
    marcarNumero($_SESSION['matriz'], $numeroCantado);  
    $cantados[] = $numeroCantado;  
    $_SESSION['cantados'] = $cantados;  

    // Verifica si se alcanzaron los aciertos  
    if (verificarAciertos($_SESSION['matriz'], $aciertos)) {  
        $mensaje = "¡Has alcanzado el número de aciertos de $aciertos! Juego terminado.";  
        session_destroy(); // Reinicia el juego  
        $matriz = [];  
    } else {  
        $mensaje = "Número cantado: $numeroCantado.";  
    }  
} else {  
    $mensaje = "Ingresa el número de aciertos deseados y comienza el juego.";  
}  

$matriz = $_SESSION['matriz'];  
?>  

<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Juego de Bingo</title>  
</head>  
<body>  
    <h1>Bingo</h1>  
    <form method="post">  
        <label for="aciertos">Número de aciertos:</label>  
        <input type="number" id="aciertos" name="aciertos" required>  
        <input type="submit" value="Comenzar a cantar números">  
    </form>  
    
    <p><?php echo $mensaje; ?></p>  

    <table border="1">  
        <tr>  
            <?php foreach ($matriz as $fila): ?>  
                <tr>  
                    <?php foreach ($fila as $valor): ?>  
                        <td><?php echo $valor; ?></td>  
                    <?php endforeach; ?>  
                </tr>  
            <?php endforeach; ?>  
        </tr>  
    </table>  
</body>  
</html>  