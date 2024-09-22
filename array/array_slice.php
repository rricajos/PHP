<?php
// Ejemplo 1: Extraer una porción de un array numérico
$mi_array1 = array(1, 2, 3, 4, 5, 6);
$porcion1 = array_slice($mi_array1, 2, 3); // Desde el índice 2, tomar 3 elementos
echo "Ejemplo 1 (Extraer una porción de un array numérico):\n";
print_r($porcion1);


// Ejemplo 2: Extraer desde un índice negativo
$mi_array2 = array("a", "b", "c", "d", "e");
$porcion2 = array_slice($mi_array2, -3, 2); // Desde el índice -3, tomar 2 elementos
echo "\nEjemplo 2 (Extraer desde un índice negativo):\n";
print_r($porcion2);


// Ejemplo 3: Extraer todo el array a partir de un índice
$mi_array3 = array("uno", "dos", "tres", "cuatro");
$porcion3 = array_slice($mi_array3, 1); // Desde el índice 1 hasta el final
echo "\nEjemplo 3 (Extraer todo el array a partir de un índice):\n";
print_r($porcion3);


// Ejemplo 4: Extraer una porción de un array asociativo
$mi_array4 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
$porcion4 = array_slice($mi_array4, 1, 2); // Desde el índice 1, tomar 2 elementos
echo "\nEjemplo 4 (Extraer una porción de un array asociativo):\n";
print_r($porcion4);


// Ejemplo 5: Extraer sin conservar las claves
$mi_array5 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
$porcion5 = array_slice($mi_array5, 1, 2, true); // Extrae pero conserva las claves
echo "\nEjemplo 5 (Extraer y conservar las claves):\n";
print_r($porcion5);


// Ejemplo 6: Usar un índice negativo y no especificar la longitud
$mi_array6 = array("uno", "dos", "tres", "cuatro", "cinco");
$porcion6 = array_slice($mi_array6, -2); // Desde el índice -2 hasta el final
echo "\nEjemplo 6 (Usar un índice negativo sin especificar longitud):\n";
print_r($porcion6);
?>
