<?php
// Ejemplo 1: Ordenar un array numérico simple
$mi_array1 = array(3, 1, 4, 1, 5, 9);
array_multisort($mi_array1);
echo "Ejemplo 1 (Ordenar un array numérico simple):\n";
print_r($mi_array1);


// Ejemplo 2: Ordenar dos arrays a la vez (según el primer array)
$mi_array2a = array(3, 2, 5, 4);
$mi_array2b = array("c", "b", "e", "d");
array_multisort($mi_array2a, $mi_array2b);
echo "\nEjemplo 2 (Ordenar dos arrays juntos):\n";
print_r($mi_array2a);
print_r($mi_array2b);


// Ejemplo 3: Ordenar un array asociativo (usando valores)
$mi_array3 = array("a" => 3, "b" => 1, "c" => 2);
array_multisort($mi_array3);
echo "\nEjemplo 3 (Ordenar un array asociativo por valores):\n";
print_r($mi_array3);


// Ejemplo 4: Ordenar un array multidimensional
$mi_array4 = array(
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30),
    array("nombre" => "Luis", "edad" => 20)
);
$edades = array_column($mi_array4, 'edad'); // Extraemos la columna de edades
array_multisort($edades, SORT_ASC, $mi_array4); // Ordenamos por edad
echo "\nEjemplo 4 (Ordenar array multidimensional por edad):\n";
print_r($mi_array4);


// Ejemplo 5: Ordenar un array numérico en orden descendente
$mi_array5 = array(3, 1, 4, 1, 5, 9);
array_multisort($mi_array5, SORT_DESC);
echo "\nEjemplo 5 (Ordenar un array numérico en orden descendente):\n";
print_r($mi_array5);


// Ejemplo 6: Ordenar dos arrays, el primero en orden ascendente y el segundo en orden descendente
$mi_array6a = array(3, 2, 5, 4);
$mi_array6b = array("c", "b", "e", "d");
array_multisort($mi_array6a, SORT_ASC, $mi_array6b, SORT_DESC);
echo "\nEjemplo 6 (Ordenar primer array ascendente, segundo descendente):\n";
print_r($mi_array6a);
print_r($mi_array6b);
?>
