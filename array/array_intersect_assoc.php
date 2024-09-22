<?php
// Ejemplo 1: Intersección básica con claves y valores
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 4, 'b' => 2, 'd' => 6];

$result = array_intersect_assoc($array1, $array2);
echo "Ejemplo 1:\n";
print_r($result); 
// Resultado: ['b' => 2]


// Ejemplo 2: Intersección con varios arrays
$array1 = ['x' => 1, 'y' => 2, 'z' => 3];
$array2 = ['y' => 2, 'z' => 4];
$array3 = ['z' => 3, 'w' => 5];

$result = array_intersect_assoc($array1, $array2, $array3);
echo "Ejemplo 2:\n";
print_r($result); 
// Resultado: ['y' => 2]


// Ejemplo 3: Claves y valores no coincidentes
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['a' => 3, 'b' => 2];

$result = array_intersect_assoc($array1, $array2);
echo "Ejemplo 3:\n";
print_r($result); 
// Resultado: ['b' => 2]


// Ejemplo 4: Claves mixtas
$array1 = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
$array2 = ['age' => 30, 'city' => 'Los Angeles', 'country' => 'USA'];

$result = array_intersect_assoc($array1, $array2);
echo "Ejemplo 4:\n";
print_r($result); 
// Resultado: ['age' => 30]


?>
