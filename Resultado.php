<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
// Obtner los valores de los campos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

// Realizar la opracion segun la seleccion 
switch ($operacion) {
case 'suma':
    $resultado = $num1 + $num2;
    break;
case 'resta':
    $resultado = $num1 - $num2;
    break;
case 'multiplicacion':
    $resultado = $num1 * $num2;
    break;
case 'division':
    if ($num2 == 0) {
        $resultado = "No se puede dividir por cero";
    } else {
    $resultado = $num1 / $num2;
    }
    break;

// Mostrar el rsultado
}
echo "El resultado de la operacion es: " . $resultado;

}
?>
    
</body>
</html>