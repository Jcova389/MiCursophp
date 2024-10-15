<?php

/* $matriz1 = [
    [2, 3, 4],
    [5, 5, 7]
]; */
$matriz2 = array();
llenarMatriz($matriz2,5,2);
mostrarMatriz($matriz2,5,2);
echo '<br>';
$matriz1=array();
$cantF=2;
$cantC=2;
llenarMatriz($matriz1,$cantF,$cantC);
mostrarMatriz($matriz1,$cantF,$cantC);



/* Imprimimos la matriz en formato de tabla para mejor visualización
Dentro del lenguaje de diseño web, las tablas HTML se crean usando las etiquetas <table> y </table>. 
En ella se incluyen dos etiquetas importantes: <tr>, que es para crear filas de tablas y <td>, para crear celdas de datos.
Todo lo que esté dentro de ambas etiquetas es el contenido de la celda de la tabla.*/
function mostrarMatriz(&$matriz, $f,  $c)
{
    echo "<table border='1'>";
    for ($i = 0; $i < $f; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $c; $j++) {

            echo "<td>" ."posicion". $i,$j."=".  $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function llenarMatriz(&$matriz, $f,  $c)
{
    // Llenamos la matriz con números aleatorios del 1 al 20
    for ($i = 0; $i < $f; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $matriz[$i][$j] = rand(1, 20);
        }
    }


}