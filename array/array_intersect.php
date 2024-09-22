<?php
// Ejemplo 1: Intersección básica
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

$result = array_intersect($array1, $array2);
echo "Ejemplo 1:\n";
print_r($result); 
// Resultado: [2 => 3, 3 => 4]
// i : la clave es el indice de array1


// Ejemplo 2: Intersección con varios arrays
$array1 = ['a', 'b', 'c'];
$array2 = ['b', 'c', 'd'];
$array3 = ['c', 'd', 'e'];

$result = array_intersect($array1, $array2, $array3);
echo "Ejemplo 2:\n";
print_r($result); 
// Resultado: [2 => 'c']


// Ejemplo 3: Intersección con claves numéricas
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
$array3 = [4, 5, 6, 7];


$result = array_intersect($array1, $array2, $array3);
echo "Ejemplo 3:\n";
print_r($result); 
// Resultado: [3 => 4]


// Ejemplo 4: Intersección con valores duplicados
$array1 = [1, 2, 2, 3];
$array2 = [2, 2, 4];

$result = array_intersect($array1, $array2);
echo "Ejemplo 4:\n";
print_r($result); 
// Resultado: [1 => 2]


// Ejemplo 5: Intersección con valores de diferentes tipos
$array1 = [1, '2', 3];
$array2 = [2, 3, 4];

$result = array_intersect($array1, $array2);
echo "Ejemplo 5:\n";
print_r($result); 
// Resultado: [2 => 3]
?>
