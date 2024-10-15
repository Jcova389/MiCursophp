php
<?php  
session_start();  

// Definir el tamaño de la matriz  
define('TAM', 5);  

// Inicializando variables  
if (!isset($_SESSION['matriz'])) {  
    $matriz = [];  
    for ($i = 0; $i < TAM; $i++) {  
        for ($j = 0; $j < TAM; $j++) {  
            do {  
                $numero = rand(1, 75); // Números aleatorios del bingo (1 a 75)  
            } while (in_array($numero, array_merge(...$matriz))); // Asegura que sean únicos  
            $matriz[$i][$j] = $numero;  
        }  
    }  
    $_SESSION['matriz'] = $matriz;  
    $_SESSION['cantados'] = [];  
}  

function cantarNumero() {  
    return rand(1, 75);  
}  

function marcarNumero(&$matriz, $numero) {  
    foreach ($matriz as &$fila) {  
        foreach ($fila as &$valor) {  
            if ($valor === $numero) {  
                $valor = 'X'; // Marcamos el número  
            }  
        }  
    }  
}  

function verificarAciertos($matriz) {  
    $totalAciertos = 0;  
    foreach ($matriz as $fila) {  
        foreach ($fila as $valor) {  
            if ($valor === 'X') {  
                $totalAciertos++;  
            }  
        }  
    }  
    return $totalAciertos;  
}  

// Manejo de formulario  
$mensaje = '';  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    $aciertos = (int)$_POST['aciertos'];  
    $cantados = $_SESSION['cantados'];  

    // Generar un número nuevo para cantar  
    do {  
        $numeroCantado = cantarNumero();  
    } while (in_array($numeroCantado, $cantados));  

    // Marcar en matriz y agregar a la lista de números cantados  
    marcarNumero($_SESSION['matriz'], $numeroCantado);  
    $cantados[] = $numeroCantado;  
    $_SESSION['cantados'] = $cantados;  

    $totalAciertos = verificarAciertos($_SESSION['matriz']);  
    
    if ($totalAciertos >= $aciertos) {  
        $mensaje = "¡Has alcanzado el número de aciertos de $aciertos! Juego terminado.";  
        session_destroy(); // Reinicia el juego  
        $_SESSION['matriz'] = null; // Limpia la matriz  
    } else {  
        $mensaje = "Número cantado: $numeroCantado. Aciertos actuales: $totalAciertos.";  
    }  
}  

$matriz = $_SESSION['matriz'];  

?>  

<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Juego de Bingo</title>  
    <style>  
        table {  
            border-collapse: collapse;  
            margin-top: 20px;  
        }  
        td {  
            width: 30px;  
            height: 30px;  
            text-align: center;  
            border: 1px solid #000;  
            font-weight: bold;  
        }  
        .marcado {  
            background-color: #ffcccb;  
        }  
    </style>  
</head>  
<body>  
    <h1>Bingo</h1>  
    <form method="post">  
        <label for="aciertos">Número de aciertos:</label>  
        <input type="number" id="aciertos" name="aciertos" required>  
        <input type="submit" value="Comenzar a cantar números">  
    </form>  
    
    <p><?php echo $mensaje; ?></p>  

    <?php if ($matriz): ?>  
        <table>  
            <tr>  
                <?php foreach ($matriz as $fila): ?>  
                    <tr>  
                        <?php foreach ($fila as $valor): ?>  
                            <td class="<?php echo $valor === 'X' ? 'marcado' : ''; ?>"><?php echo $valor; ?></td>  
                        <?php endforeach; ?>  
                    </tr>  
                <?php endforeach; ?>  
            </tr>  
        </table>  
    <?php endif; ?>  
</body>  
</html>