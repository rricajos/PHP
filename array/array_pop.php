<?php
// Ejemplo 1: Eliminar el último elemento de un array con frutas
$mi_array1 = array("manzana", "banana", "naranja");
$ultimo_elemento1 = array_pop($mi_array1);
echo "Ejemplo 1:\n";
echo "Último elemento eliminado: $ultimo_elemento1\n";
print_r($mi_array1);


// Ejemplo 2: Eliminar el último elemento de un array vacío (no pasa nada)
$mi_array2 = array();
$ultimo_elemento2 = array_pop($mi_array2);
echo "\nEjemplo 2 (Array vacío):\n";
echo "Último elemento eliminado: ";
var_dump($ultimo_elemento2);
print_r($mi_array2);


// Ejemplo 3: Usar array_pop en un array numérico
$mi_array3 = array(10, 20, 30, 40, 50);
$ultimo_elemento3 = array_pop($mi_array3);
echo "\nEjemplo 3 (Array numérico):\n";
echo "Último elemento eliminado: $ultimo_elemento3\n";
print_r($mi_array3);


// Ejemplo 4: Usar array_pop en un array con tipos de datos mixtos
$mi_array4 = array("a", 3.14, true, "PHP");
$ultimo_elemento4 = array_pop($mi_array4);
echo "\nEjemplo 4 (Array con tipos de datos mixtos):\n";
echo "Último elemento eliminado: ";
var_dump($ultimo_elemento4);
print_r($mi_array4);
?>
