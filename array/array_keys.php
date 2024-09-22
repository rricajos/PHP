<?php
// Ejemplo 1: Obtener las claves de un array simple
$array1 = ["manzana", "plátano", "cereza"];
$claves1 = array_keys($array1);
echo "Ejemplo 1:\n";
print_r($claves1);
// Resultado: [0, 1, 2]

// Ejemplo 2: Obtener las claves de un array asociativo
$array2 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
$claves2 = array_keys($array2);
echo "Ejemplo 2:\n";
print_r($claves2);
// Resultado: ["nombre", "edad", "ciudad"]

// Ejemplo 3: Obtener claves que corresponden a un valor específico
$array3 = ["a" => 1, "b" => 2, "c" => 1, "d" => 3];
$claves3 = array_keys($array3, 1);
echo "Ejemplo 3:\n";
print_r($claves3);
// Resultado: ["a", "c"]

// Ejemplo 4: Obtener claves con un array asociativo con valores duplicados
$array4 = ["x" => 1, "y" => 2, "z" => 2];
$claves4 = array_keys($array4, 2);
echo "Ejemplo 4:\n";
print_r($claves4);
// Resultado: ["y", "z"]

// Ejemplo 5: Obtener claves de un array multidimensional
$array5 = [
    ["nombre" => "Juan", "edad" => 30],
    ["nombre" => "Ana", "edad" => 25],
];
$claves5 = array_keys($array5[0]);
echo "Ejemplo 5:\n";
print_r($claves5);
// Resultado: ["nombre", "edad"]

?>
