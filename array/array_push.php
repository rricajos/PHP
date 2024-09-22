<?php
// Paso 1: Definimos un array inicial
$mi_array = array("manzana", "banana", "naranja");

// Mostramos el array original
echo "Array original:\n";
print_r($mi_array);

// Paso 2: Utilizamos array_push para agregar un elemento al final del array
// Vamos a agregar la fruta "pera"
array_push($mi_array, "pera");

// Mostramos el array después de agregar el nuevo elemento
echo "\nArray después de agregar 'pera':\n";
print_r($mi_array);

// Paso 3: Podemos agregar varios elementos a la vez
// Vamos a agregar "uva" y "sandía"
array_push($mi_array, "uva", "sandía");

// Mostramos el array después de agregar múltiples elementos
echo "\nArray después de agregar 'uva' y 'sandía':\n";
print_r($mi_array);

// Paso 4: array_push devuelve el número total de elementos en el array
$total_elementos = array_push($mi_array, "mango");

// Mostramos el número total de elementos después de agregar "mango"
echo "\nTotal de elementos después de agregar 'mango': $total_elementos\n";

// Mostramos el array final
echo "\nArray final:\n";
print_r($mi_array);
?>
