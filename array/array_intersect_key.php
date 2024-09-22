<?php

// Ejemplo 1: Intersección básica de claves
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 4, 'b' => 5, 'd' => 6];

$result = array_intersect_key($array1, $array2);
echo "Ejemplo 1:\n";
print_r($result); 
// Resultado: ['a' => 1, 'b' => 2]


// Ejemplo 2: Intersección con varios arrays
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['b' => 4, 'c' => 5];
$array3 = ['c' => 6, 'd' => 7];

$result = array_intersect_key($array1, $array2, $array3);
echo "Ejemplo 2:\n";
print_r($result); 
// Resultado: ['c' => 3]


// Ejemplo 3: Claves numéricas
$array1 = [0 => 'a', 1 => 'b', 2 => 'c'];
$array2 = [1 => 'd', 2 => 'e', 3 => 'f'];

$result = array_intersect_key($array1, $array2);
echo "Ejemplo 3:\n";
print_r($result); 
// Resultado: [2 => 'c']


// Ejemplo 4: Claves con valores mixtos
$array1 = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
$array2 = ['age' => 25, 'city' => 'Los Angeles', 'country' => 'USA'];

$result = array_intersect_key($array1, $array2);
echo "Ejemplo 4:\n";
print_r($result); 
// Resultado: ['age' => 30, 'city' => 'New York']


// Ejemplo 5: Claves sin coincidencias
$array1 = ['x' => 1, 'y' => 2];
$array2 = ['a' => 3, 'b' => 4];

$result = array_intersect_key($array1, $array2);
echo "Ejemplo 5:\n";
print_r($result); 
// Resultado: []
?>
