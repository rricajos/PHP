<?php
// Ejemplo 1: Usar array_map con una función de usuario simple (cuadrado de cada número)
$mi_array1 = array(1, 2, 3, 4);
$cuadrado = function($n) {
    return $n * $n;
};
$resultado1 = array_map($cuadrado, $mi_array1);
echo "Ejemplo 1 (Cuadrado de cada número):\n";
print_r($resultado1);


// Ejemplo 2: Usar array_map con una función nativa de PHP (strtoupper para convertir a mayúsculas)
$mi_array2 = array("manzana", "banana", "pera");
$resultado2 = array_map('strtoupper', $mi_array2);
echo "\nEjemplo 2 (Convertir a mayúsculas):\n";
print_r($resultado2);


// Ejemplo 3: Usar array_map con múltiples arrays (sumar los elementos de dos arrays)
$mi_array3a = array(1, 2, 3);
$mi_array3b = array(4, 5, 6);
$resultado3 = array_map(function($a, $b) {
    return $a + $b;
}, $mi_array3a, $mi_array3b);
echo "\nEjemplo 3 (Suma de dos arrays):\n";
print_r($resultado3);


// Ejemplo 4: Usar array_map con múltiples arrays de tamaños desiguales
$mi_array4a = array(1, 2, 3);
$mi_array4b = array(4, 5);  // Tiene menos elementos
$resultado4 = array_map(function($a, $b) {
    return $a * $b;
}, $mi_array4a, $mi_array4b);
echo "\nEjemplo 4 (Multiplicar con arrays de tamaños diferentes):\n";
print_r($resultado4);


// Ejemplo 5: Usar array_map sin función (solo devuelve una copia del array)
$mi_array5 = array("a", "b", "c");
$resultado5 = array_map(null, $mi_array5);
echo "\nEjemplo 5 (Copia del array original):\n";
print_r($resultado5);


// Ejemplo 6: Usar array_map con arrays asociativos
$mi_array6 = array("nombre" => "Juan", "edad" => 25);
$resultado6 = array_map(function($item) {
    return is_numeric($item) ? $item * 2 : strtoupper($item);
}, $mi_array6);
echo "\nEjemplo 6 (Manipular array asociativo):\n";
print_r($resultado6);
?>
