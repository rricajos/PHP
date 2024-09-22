<?php
// Ejemplo 1: Sumar un array numérico simple
$mi_array1 = array(1, 2, 3, 4, 5);
$suma1 = array_sum($mi_array1);
echo "Ejemplo 1 (Suma de un array numérico simple):\n";
echo "Suma: $suma1\n";

// Ejemplo 2: Sumar un array con números negativos
$mi_array2 = array(-1, -2, -3, -4);
$suma2 = array_sum($mi_array2);
echo "\nEjemplo 2 (Suma de un array con números negativos):\n";
echo "Suma: $suma2\n";

// Ejemplo 3: Sumar un array con valores mixtos
$mi_array3 = array(10, "20", 30, "40.5");
$suma3 = array_sum($mi_array3);
echo "\nEjemplo 3 (Suma de un array con valores mixtos):\n";
echo "Suma: $suma3\n";

// Ejemplo 4: Sumar un array vacío
$mi_array4 = array();
$suma4 = array_sum($mi_array4);
echo "\nEjemplo 4 (Suma de un array vacío):\n";
echo "Suma: $suma4\n"; // Debería ser 0

// Ejemplo 5: Sumar un array asociativo
$mi_array5 = array("a" => 1, "b" => 2, "c" => 3);
$suma5 = array_sum($mi_array5);
echo "\nEjemplo 5 (Suma de un array asociativo):\n";
echo "Suma: $suma5\n";

// Ejemplo 6: Sumar un array multidimensional (necesitando una flatten)
$mi_array6 = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
$suma6 = array_sum(array_merge(...$mi_array6)); // Aplana el array y suma
echo "\nEjemplo 6 (Suma de un array multidimensional):\n";
echo "Suma: $suma6\n";
?>
