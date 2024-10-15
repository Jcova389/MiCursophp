<?
1. count() - Contar Elementos:
La función count() te permite obtener el número de elementos en un array, proporcionando información esencial sobre la dimensión y el tamaño del array.

Ejemplo de Uso de count():
$frutas = ["Manzana", "Banana", "Naranja"];
echo count($frutas); // Esto imprimirá 3
2. array_push() y array_pop() - Agregar y Eliminar Elementos:
array_push() te permite agregar uno o más elementos al final de un array, mientras que array_pop() elimina y retorna el último elemento de un array.

Ejemplo de Uso de array_push() y array_pop():
$frutas = ["Manzana", "Banana"];
array_push($frutas, "Naranja"); // Agrega "Naranja" al final
print_r($frutas); // Esto imprimirá: Array ( [0] => Manzana [1] => Banana [2] => Naranja )

$fruta_eliminada = array_pop($frutas); // Elimina y obtiene "Naranja"
print_r($frutas); // Esto imprimirá: Array ( [0] => Manzana [1] => Banana )
echo $fruta_eliminada; // Esto imprimirá: Naranja
3. array_merge() - Combinar Arrays:
La función array_merge() combina dos o más arrays en uno nuevo, permitiendo la fusión de datos de diferentes arrays en uno solo.

Ejemplo de Uso de array_merge():
$frutas = ["Manzana", "Banana"];
$nuevas_frutas = ["Naranja", "Pera"];
$frutas_completas = array_merge($frutas, $nuevas_frutas);
print_r($frutas_completas);
// Esto imprimirá: Array ( [0] => Manzana [1] => Banana [2] => Naranja [3] => Pera )
4. array_slice() - Obtener una Porción de Array:
La función array_slice() devuelve una porción de un array, permitiendo extraer un rango específico de elementos.

Ejemplo de Uso de array_slice():
$frutas = ["Manzana", "Banana", "Naranja", "Pera", "Melón"];
$porcion = array_slice($frutas, 1, 3);
print_r($porcion);
// Esto imprimirá: Array ( [0] => Banana [1] => Naranja [2] => Pera )
5. array_reverse() - Revertir un Array:
La función array_reverse() invierte el orden de los elementos en un array, permitiendo acceder a los elementos en orden inverso.

Ejemplo de Uso de array_reverse():
$frutas = ["Manzana", "Banana", "Naranja"];
$frutas_invertidas = array_reverse($frutas);
print_r($frutas_invertidas);
// Esto imprimirá: Array ( [0] => Naranja [1] => Banana [2] => Manzana )
6. array_unique() - Eliminar Duplicados:
La función array_unique() elimina los elementos duplicados de un array, dejando únicamente las entradas únicas.

Ejemplo de Uso de array_unique():
$frutas = ["Manzana", "Banana", "Manzana", "Naranja", "Banana"];
$frutas_unicas = array_unique($frutas);
print_r($frutas_unicas);
// Esto imprimirá: Array ( [0] => Manzana [1] => Banana [3] => Naranja )
7. array_search() - Buscar un Elemento:
La función array_search() busca un valor específico en un array y devuelve la clave correspondiente si se encuentra, o false si no.

Ejemplo de Uso de array_search():
$frutas = ["Manzana", "Banana", "Naranja"];
$posicion = array_search("Banana", $frutas);
echo "Banana está en la posición: $posicion";
// Esto imprimirá: Banana está en la posición: 1
8. array_keys() - Obtener las Claves:
La función array_keys() devuelve un array con las claves de un array asociativo, facilitando el acceso a las claves.

Ejemplo de Uso de array_keys():
$frutas = ["manzana" => "roja", "banana" => "amarilla", "naranja" => "naranja"];
$claves = array_keys($frutas);
print_r($claves);
// Esto imprimirá: Array ( [0] => manzana [1] => banana [2] => naranja )
9. array_values() - Obtener los Valores:
La función array_values() devuelve un array con los valores de un array asociativo, facilitando el acceso a los valores.

Ejemplo de Uso de array_values():
$frutas = ["manzana" => "roja", "banana" => "amarilla", "naranja" => "naranja"];
$valores = array_values($frutas);
print_r($valores);
// Esto imprimirá: Array ( [0] => roja [1] => amarilla [2] => naranja )
10. in_array() - Verificar la Existencia de un Elemento:
La función in_array() verifica si un valor específico existe en un array, devolviendo true si está presente y false si no.

Ejemplo de Uso de in_array():
$frutas = ["Manzana", "Banana", "Naranja"];
$existe = in_array("Banana", $frutas);
echo $existe ? "Banana existe en el array" : "Banana no existe en el array";
// Esto imprimirá: Banana existe en el array

>?