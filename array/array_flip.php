<?php

// Ejemplo 1: Array simple
$array1 = ['a' => 'manzana', 'b' => 'banana', 'c' => 'cereza'];
$result1 = array_flip($array1);
echo "Ejemplo 1:\n";
print_r($result1);

// Ejemplo 2: Array con valores duplicados
$array2 = ['a' => 'manzana', 'b' => 'banana', 'c' => 'manzana'];
$result2 = array_flip($array2);
echo "\nEjemplo 2:\n";
print_r($result2); // Notar que 'manzana' se sobrescribirá

// Ejemplo 3: Array numérico
$array3 = [1 => 'rojo', 2 => 'verde', 3 => 'azul'];
$result3 = array_flip($array3);
echo "\nEjemplo 3:\n";
print_r($result3);

// Ejemplo 4: Array con claves numéricas y valores duplicados
$array4 = [1 => 'rojo', 2 => 'verde', 3 => 'rojo'];
$result4 = array_flip($array4);
echo "\nEjemplo 4:\n";
print_r($result4); // 'rojo' se sobrescribirá

// Ejemplo 5: Array vacío
$array5 = [];
$result5 = array_flip($array5);
echo "\nEjemplo 5:\n";
print_r($result5); // Debería devolver un array vacío


?>
