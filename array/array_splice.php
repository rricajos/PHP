<?php
// Ejemplo 1: Eliminar elementos desde una posición específica
$mi_array1 = array(1, 2, 3, 4, 5, 6);
array_splice($mi_array1, 2); // Elimina desde el índice 2 en adelante
echo "Ejemplo 1 (Eliminar elementos desde el índice 2):\n";
print_r($mi_array1);


// Ejemplo 2: Eliminar un número específico de elementos
$mi_array2 = array("a", "b", "c", "d", "e");
array_splice($mi_array2, 1, 2); // Elimina 2 elementos desde el índice 1
echo "\nEjemplo 2 (Eliminar 2 elementos desde el índice 1):\n";
print_r($mi_array2);


// Ejemplo 3: Reemplazar elementos en una posición específica
$mi_array3 = array(10, 20, 30, 40, 50);
array_splice($mi_array3, 1, 2, array(100, 200)); // Reemplaza 2 elementos a partir del índice 1
echo "\nEjemplo 3 (Reemplazar 2 elementos desde el índice 1):\n";
print_r($mi_array3);


// Ejemplo 4: Insertar elementos sin eliminar (longitud 0)
$mi_array4 = array("rojo", "verde", "azul");
array_splice($mi_array4, 1, 0, array("amarillo", "morado")); // Inserta sin eliminar
echo "\nEjemplo 4 (Insertar elementos en el índice 1 sin eliminar):\n";
print_r($mi_array4);


// Ejemplo 5: Eliminar y retornar los elementos eliminados
$mi_array5 = array("uno", "dos", "tres", "cuatro");
$eliminados = array_splice($mi_array5, 1, 2); // Elimina 2 elementos desde el índice 1 y los devuelve
echo "\nEjemplo 5 (Eliminar y retornar los elementos eliminados):\n";
echo "Array modificado:\n";
print_r($mi_array5);
echo "Elementos eliminados:\n";
print_r($eliminados);


// Ejemplo 6: Insertar un solo elemento
$mi_array6 = array(1, 2, 3, 4);
array_splice($mi_array6, 2, 0, 99); // Inserta el número 99 en el índice 2
echo "\nEjemplo 6 (Insertar un solo elemento en el índice 2):\n";
print_r($mi_array6);
?>
