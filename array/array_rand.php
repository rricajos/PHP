<?php
// Ejemplo 1: Obtener una clave aleatoria de un array numérico
$mi_array1 = array("rojo", "verde", "azul", "amarillo");
$clave_aleatoria1 = array_rand($mi_array1);
echo "Ejemplo 1 (Obtener una clave aleatoria de un array numérico):\n";
echo "Clave aleatoria: $clave_aleatoria1, Valor: " . $mi_array1[$clave_aleatoria1] . "\n";

// Ejemplo 2: Obtener varias claves aleatorias de un array
$mi_array2 = array("a", "b", "c", "d", "e");
$claves_aleatorias2 = array_rand($mi_array2, 3); // Obtener 3 claves aleatorias
echo "\nEjemplo 2 (Obtener varias claves aleatorias de un array):\n";
foreach ($claves_aleatorias2 as $clave) {
    echo "Clave: $clave, Valor: " . $mi_array2[$clave] . "\n";
}

// Ejemplo 3: Obtener una clave aleatoria de un array asociativo
$mi_array3 = array("color" => "verde", "forma" => "cuadrado", "tamaño" => "grande");
$clave_aleatoria3 = array_rand($mi_array3);
echo "\nEjemplo 3 (Obtener una clave aleatoria de un array asociativo):\n";
echo "Clave aleatoria: $clave_aleatoria3, Valor: " . $mi_array3[$clave_aleatoria3] . "\n";

// Ejemplo 4: Manejar el caso donde se solicitan más claves de las disponibles
$mi_array4 = array("uno", "dos");
try {
    $claves_aleatorias4 = array_rand($mi_array4, 3); // Intenta obtener 3 claves
    foreach ($claves_aleatorias4 as $clave) {
        echo "\nClave: $clave, Valor: " . $mi_array4[$clave] . "\n";
    }
} catch (Exception $e) {
    echo "\nEjemplo 4 (Manejar el caso donde se solicitan más claves de las disponibles):\n";
    echo "Error: " . $e->getMessage() . "\n"; // No se puede obtener más claves de las disponibles
}

// Ejemplo 5: Usar array_rand con un array vacío
$mi_array5 = array();
$claves_aleatorias5 = array_rand($mi_array5, 1); // Debería lanzar un error
echo "\nEjemplo 5 (Usar array_rand con un array vacío):\n";
if ($claves_aleatorias5 === false) {
    echo "No se puede obtener claves de un array vacío.\n";
} else {
    echo "Clave aleatoria: $claves_aleatorias5, Valor: " . $mi_array5[$claves_aleatorias5] . "\n";
}
?>
