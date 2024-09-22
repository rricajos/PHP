<?php
// Ejemplo 1: Llenar un array con claves string y un valor común
print_r(array_fill_keys(['a', 'b', 'c'], 'manzana'));
// ['a' => 'manzana', 'b' => 'manzana', 'c' => 'manzana']

// Ejemplo 2: Llenar un array con claves numéricas y un valor numérico
print_r(array_fill_keys([1, 2, 3, 4], 100));
// [1 => 100, 2 => 100, 3 => 100, 4 => 100]

// Ejemplo 3: Usar claves mixtas (string y numéricas)
print_r(array_fill_keys(['nombre', 'apellido'], 'desconocido'));
// ['nombre' => 'desconocido', 'apellido' => 'desconocido']

// Ejemplo 4: Usar un array de claves vacío
print_r(array_fill_keys([], 'valor por defecto'));
// []

// Ejemplo 5: Llenar con valores booleanos
print_r(array_fill_keys(['x', 'y', 'z'], true));
// ['x' => true, 'y' => true, 'z' => true]

?>
