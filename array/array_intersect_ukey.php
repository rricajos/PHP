<?php
// Función de comparación personalizada para array_intersect_ukey
function comparacionPersonalizada($key1, $key2) {
    return $key1 <=> $key2; // Comparación estándar
}

// Ejemplo 1: Intersección básica de claves con comparación personalizada
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['b' => 4, 'c' => 5, 'd' => 6];

$result = array_intersect_ukey($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 1:\n";
print_r($result); 
// Resultado: ['b' => 2, 'c' => 3]


// Ejemplo 2: Intersección con varios arrays y claves personalizadas
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['B' => 4, 'C' => 5];
$array3 = ['c' => 6, 'd' => 7];

$result = array_intersect_ukey($array1, $array2, $array3, 'comparacionPersonalizada');
echo "Ejemplo 2:\n";
print_r($result); 
// Resultado: ['c' => 3]


// Ejemplo 3: Claves numéricas
$array1 = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd'];
$array2 = [1 => 'd', 2 => 'c', 3 => 'f'];

$result = array_intersect_ukey($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 3:\n";
print_r($result); 
// Resultado: [1] => b, [2] => c, [3] => d


// Ejemplo 4: Claves mixtas con comparación personalizada
$array1 = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
$array2 = ['age' => 25, 'city' => 'Los Angeles', 'country' => 'USA'];

$result = array_intersect_ukey($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 4:\n";
print_r($result); 
// Resultado: ['age' => 30, 'city' => 'New York']


// Ejemplo 5: Claves sin coincidencias
$array1 = ['x' => 1, 'y' => 2];
$array2 = ['a' => 3, 'b' => 4];

$result = array_intersect_ukey($array1, $array2, 'comparacionPersonalizada');
echo "Ejemplo 5:\n";
print_r($result); 
// Resultado: []
?>
