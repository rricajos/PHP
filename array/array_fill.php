<?php

// Ejemplo 1: Llenar un array desde el índice 0 con un mismo valor
$array1 = array_fill(0, 5, 'manzana');
echo "Ejemplo 1: Llenar desde el índice 0 con 'manzana'\n";
print_r($array1);
// Resultado: ['manzana', 'manzana', 'manzana', 'manzana', 'manzana']

// Ejemplo 2: Llenar un array desde un índice positivo
$array2 = array_fill(3, 4, 'banana');
echo "\nEjemplo 2: Llenar desde el índice 3 con 'banana'\n";
print_r($array2);
// Resultado: [3 => 'banana', 4 => 'banana', 5 => 'banana', 6 => 'banana']

// Ejemplo 3: Llenar un array desde un índice negativo
$array3 = array_fill(-3, 5, 'naranja');
echo "\nEjemplo 3: Llenar desde el índice -3 con 'naranja'\n";
print_r($array3);
// Resultado: [-3 => 'naranja', -2 => 'naranja', -1 => 'naranja', 0 => 'naranja', 1 => 'naranja']

// Ejemplo 4: Llenar un array con valores numéricos
$array4 = array_fill(0, 3, 100);
echo "\nEjemplo 4: Llenar desde el índice 0 con el valor numérico 100\n";
print_r($array4);
// Resultado: [100, 100, 100]

// Ejemplo 5: Intentar llenar con tamaño 0
$array5 = array_fill(0, 0, 'pera');
echo "\nEjemplo 5: Llenar con tamaño 0\n";
print_r($array5);
// Resultado: Array vacío []

// Ejemplo 6: Usar un tamaño mayor que 0 y otro valor
$array6 = array_fill(5, 2, true);
echo "\nEjemplo 6: Llenar desde el índice 5 con valor booleano true\n";
print_r($array6);
// Resultado: [5 => true, 6 => true]

?>
