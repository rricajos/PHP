<?php
// Ejemplo 1: Rellenar con "pera" hasta tener 5 elementos
$mi_array1 = array("manzana", "banana", "naranja");
$mi_array1 = array_pad($mi_array1, 5, "pera");
echo "Ejemplo 1:\n";
print_r($mi_array1);


// Ejemplo 2: Rellenar con "uva" hasta tener 6 elementos
$mi_array2 = array("fresa", "kiwi");
$mi_array2 = array_pad($mi_array2, 6, "uva");
echo "\nEjemplo 2:\n";
print_r($mi_array2);


// Ejemplo 3: Rellenar hacia la izquierda (con números negativos) con "limón" hasta tener 5 elementos
$mi_array3 = array("mango", "piña");
$mi_array3 = array_pad($mi_array3, -5, "limón");
echo "\nEjemplo 3 (Relleno a la izquierda):\n";
print_r($mi_array3);


// Ejemplo 4: Si el array ya tiene más elementos que el tamaño indicado, no se hace nada
$mi_array4 = array("papaya", "sandía", "melón", "ciruela");
$mi_array4 = array_pad($mi_array4, 3, "durazno");
echo "\nEjemplo 4 (No se agrega nada si ya tiene más elementos):\n";
print_r($mi_array4);
?>
