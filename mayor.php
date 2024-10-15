<?php

$edades= array(2,4,12,34,44,56,76,78,23,45);
echo "el mayor numero es: " , encontrarMayorNumero($edades);
echo '<br>';
echo "El valor maximo es: " . max($edades);

function encontrarMayorNumero(array $numeros): int
{
    // Iniciaamos el mayor numero con el primer elemento deel arreglo.
    $mayorNumero = $numeros[0];
    // iteramos sobre cada elemento del arreglo
    foreach ($numeros as $numero) {
        // Si el numero actual es mayor que al numero mayor actual, lo actualiza
        if ($numero> $mayorNumero) {
            $mayorNumero = $numero;
        }
    }
    return $mayorNumero;
}

?>