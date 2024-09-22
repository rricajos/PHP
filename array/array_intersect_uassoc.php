<?php
// Función de comparación personalizada para array_intersect_uassoc
function comparacionPersonalizada($value1, $value2) {
    return $value1 <=> $value2; // Comparación estándar
}


// Ejemplo 1: Intersección básica con comparación de claves y valores
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 4, 'b' => 2, 'd' => 6];

$result = array_intersect_uassoc($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 1:\n";
print_r($result); 
// Resultado: ['b' => 2]


// Ejemplo 2: Intersección con varios arrays y comparación de valores
$array1 = ['x' => 1, 'y' => 2, 'z' => 3];
$array2 = ['y' => 3, 'z' => 4];
$array3 = ['z' => 3, 'w' => 5];

$result = array_intersect_uassoc($array1, $array2, 'comparacionPersonalizada', 'comparacionPersonalizada');
echo "Ejemplo 2:\n";
print_r($result); 
// Resultado: ['z' => 3]


// Ejemplo 3: Claves y valores no coincidentes
$array1 = ['a' => 1, 'b' => 2];
$array2 = ['a' => 3, 'b' => 2];

$result = array_intersect_uassoc($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 3:\n";
print_r($result); 
// Resultado: ['b' => 2]

// Ejemplo 4: Claves mixtas
$array1 = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
$array2 = ['age' => 30, 'city' => 'Los Angeles', 'country' => 'USA'];

$result = array_intersect_uassoc($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 4:\n";
print_r($result); 
// Resultado: ['age' => 30]


// Ejemplo 5: Sin coincidencias
$array1 = ['x' => 1, 'y' => 2];
$array2 = ['a' => 3, 'b' => 4];

$result = array_intersect_uassoc($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 5:\n";
print_r($result); 
// Resultado: []
?>
