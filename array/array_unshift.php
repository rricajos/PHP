<?php
// Ejemplo 1: Insertar un solo elemento en un array numérico
$frutas = ["manzana", "plátano"];
array_unshift($frutas, "naranja");
echo "Ejemplo 1:\n";
print_r($frutas);
// Resultado: ["naranja", "manzana", "plátano"]


// Ejemplo 2: Insertar varios elementos en un array numérico
$frutas = ["manzana", "plátano"];
array_unshift($frutas, "uva", "mango");
echo "Ejemplo 2:\n";
print_r($frutas);
// Resultado: ["uva", "mango", "manzana", "plátano"]


// Ejemplo 3: Usar array_unshift() con un array asociativo
$personas = ["nombre" => "Carlos", "edad" => 25];
array_unshift($personas, "ingeniero");
echo "Ejemplo 3:\n";
print_r($personas);
// Resultado: [0 => "ingeniero", "nombre" => "Carlos", "edad" => 25]


// Ejemplo 4: Insertar en un array vacío
$numeros = [];
array_unshift($numeros, 1);
array_unshift($numeros, 2, 3);
echo "Ejemplo 4:\n";
print_r($numeros);
// Resultado: [2, 3, 1]


// Ejemplo 5: Usar array_unshift() en un array con claves personalizadas
$array = [2 => "dos", "tres" => "tres"];
array_unshift($array, "uno");
echo "Ejemplo 5:\n";
print_r($array);
// Resultado: [0 => "uno", 2 => "dos", "tres" => "tres"]

?>
