<?php  
session_start();  

// Colores disponibles  
$colores = ['amarillo', 'verde', 'rojo', 'azul', 'negro'];  

// Inicializa la sesión si no existe  
if (!isset($_SESSION['coloresSeleccionados'])) {  
    $_SESSION['coloresSeleccionados'] = array_rand(array_flip($colores), 3);  
    $_SESSION['resultados'] = '';  
}  

// Maneja la entrada del usuario  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $inputUsuario = $_POST['colores'];  
    $coloresUsuario = explode(',', $inputUsuario);  
    
    $coloresAcertados = array_intersect($coloresUsuario, $_SESSION['coloresSeleccionados']);  
    $posicionesAcertadas = 0;  

    // Contar posiciones acertadas  
    foreach ($coloresUsuario as $index => $color) {  
        if (isset($_SESSION['coloresSeleccionados'][$index]) && $_SESSION['coloresSeleccionados'][$index] === $color) {  
            $posicionesAcertadas++;  
        }  
    }  

    $xColores = count($coloresAcertados);  
    $xPosiciones = $posicionesAcertadas;  

    // Mensaje para mostrar  
    if ($xColores === 3 && $xPosiciones === 3) {  
        $_SESSION['resultados'] = "¡Felicidades! Usted ha ganado.";  
    } else {  
        $_SESSION['resultados'] = "Usted aceptó $xColores colores. Usted acertó $xPosiciones posiciones.";  
    }  
}  

// Resetea la sesión si se desea jugar de nuevo  
if (isset($_POST['reset'])) {  
    session_destroy();  
    header("Location: " . $_SERVER['PHP_SELF']);  
    exit;  
}  
?>  
<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Juego de Adivinar Colores</title>  
</head>  
<body>  
    <h1>Juego de Adivinar Colores</h1>  
    <form method="post">  
        <label for="colores">Ingrese tres colores (amarillo, verde, rojo, azul, negro), separados por coma:</label><br>  
        <input type="text" name="colores" id="colores" required><br>  
        <button type="submit">Adivinar</button>  
        <button type="submit" name="reset">Reiniciar Juego</button>  
    </form>  
    
    <p><?php echo isset($_SESSION['resultados']) ? $_SESSION['resultados'] : ''; ?></p>  
    
    <p>Colores seleccionados por el PC: <?php echo implode(", ", $_SESSION['coloresSeleccionados']); ?></p>  
</body>  
</html>