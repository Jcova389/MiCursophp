<?php
$matriz=[];

// Llenamos la matriz con numeros aleatorios
for ($i = 0; $i < 4; $i++){
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i] [$j] = rand (1,20);
    }
}

//echo $matriz[8] [8];

/* Imprimimos la matiz en formato de tabla para mejor visualizacion
Dentro del lenguaje de iseño Web, las talas htmlse ccrean usando las etquetas <table> y </table>,
En ella se incluyen dos etiquetas importantes: <tr>, que es para crear filas de tabla y <td>,  para crear celdas de datos.
Todo lo que esté dentro de ambas etiquetas es el contenido de la celda de la tabla.
//print_r($matriz(;
//var-dump($matriz);

foreach ($matriz as $fila){
foreach ($matriz as $valor){
    echo $valor , " ";
}
echo "<br>";
}*/

echo "<table border='1'>";
for ($i= 0; $i <4; $i++){
    echo"<tr>";
    for ($j= 0; $j < 4; $j++) {
        echo "<td>" ."posicion". "=". $matriz[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

