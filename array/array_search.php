<?php
// Ejemplo 1: Buscar un valor en un array numérico
$mi_array1 = array(1, 2, 3, 4, 5);
$clave1 = array_search(3, $mi_array1);
echo "Ejemplo 1 (Buscar un valor en un array numérico):\n";
echo $clave1 !== false ? "Valor encontrado en la clave: $clave1\n" : "Valor no encontrado.\n";


// Ejemplo 2: Buscar un valor en un array asociativo
$mi_array2 = array("a" => "rojo", "b" => "verde", "c" => "azul");
$clave2 = array_search("verde", $mi_array2);
echo "\nEjemplo 2 (Buscar un valor en un array asociativo):\n";
echo $clave2 !== false ? "Valor encontrado en la clave: $clave2\n" : "Valor no encontrado.\n";


// Ejemplo 3: Buscar un valor que no existe
$mi_array3 = array(10, 20, 30, 40);
$clave3 = array_search(50, $mi_array3);
echo "\nEjemplo 3 (Buscar un valor que no existe):\n";
echo $clave3 !== false ? "Valor encontrado en la clave: $clave3\n" : "Valor no encontrado.\n";


// Ejemplo 4: Buscar un valor en un array con tipos de datos mixtos
$mi_array4 = array("a" => "1", "b" => 1, "c" => "2");
$clave4 = array_search(1, $mi_array4);
echo "\nEjemplo 4 (Buscar un valor en un array con tipos de datos mixtos):\n";
echo $clave4 !== false ? "Valor encontrado en la clave: $clave4\n" : "Valor no encontrado.\n";


// Ejemplo 5: Buscar con el parámetro de comparación estricta
$mi_array5 = array(0, 1, 2, 3);
$clave5 = array_search(1, $mi_array5, true); // Búsqueda estricta
echo "\nEjemplo 5 (Buscar con comparación estricta):\n";
echo $clave5 !== false ? "Valor encontrado en la clave: $clave5\n" : "Valor no encontrado.\n";


// Ejemplo 6: Buscar con comparación estricta en un array asociativo
$mi_array6 = array("a" => "1", "b" => 1);
$clave6 = array_search(1, $mi_array6, true); // Búsqueda estricta
echo "\nEjemplo 6 (Buscar en un array asociativo con comparación estricta):\n";
echo $clave6 !== false ? "Valor encontrado en la clave: $clave6\n" : "Valor no encontrado.\n";


// Ejemplo 7: Buscar un valor en un array con valores duplicados
$mi_array7 = array("x", "y", "z", "x", "w");
$clave7 = array_search("x", $mi_array7);
echo "\nEjemplo 7 (Buscar un valor en un array con valores duplicados):\n";
echo $clave7 !== false ? "Valor encontrado en la clave: $clave7\n" : "Valor no encontrado.\n"; // Devuelve la primera coincidencia


// Ejemplo 8: Buscar un valor que es una cadena numérica
$mi_array8 = array("10", 20, 30);
$clave8 = array_search("20", $mi_array8); // Sin comparación estricta
echo "\nEjemplo 8 (Buscar un valor que es una cadena numérica):\n";
echo $clave8 !== false ? "Valor encontrado en la clave: $clave8\n" : "Valor no encontrado.\n";


// Ejemplo 9: Buscar un valor booleano
$mi_array9 = array(true, false, 0, 1);
$clave9 = array_search(false, $mi_array9);
echo "\nEjemplo 9 (Buscar un valor booleano):\n";
echo $clave9 !== false ? "Valor encontrado en la clave: $clave9\n" : "Valor no encontrado.\n";


// Ejemplo 10: Buscar en un array multidimensional
$mi_array10 = array(
    array("id" => 1, "nombre" => "Juan"),
    array("id" => 2, "nombre" => "Ana"),
);
$valor_a_buscar = "Ana";
$clave10 = array_search($valor_a_buscar, array_column($mi_array10, 'nombre'));
echo "\nEjemplo 10 (Buscar en un array multidimensional):\n";
echo $clave10 !== false ? "Valor encontrado en la clave: $clave10\n" : "Valor no encontrado.\n";
?>
