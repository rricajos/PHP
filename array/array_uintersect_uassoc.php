<?php

// Definir la función de comparación para los valores
function comparacionValoresPersonalizada($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Definir la función de comparación para las claves
function comparacionClavesPersonalizada($a, $b) {
    if ($a === $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Definir los arrays de ejemplo
$array1 = array("a" => 100, "b" => 200, "c" => 300);
$array2 = array("a" => 100, "b" => 250, "c" => 300);
$array3 = array("a" => 100, "b" => 200, "d" => 300);

// Usar array_uintersect_uassoc para encontrar la intersección por valores y claves
$resultado = array_uintersect_uassoc($array1, $array2, $array3, 'comparacionValoresPersonalizada', 'comparacionClavesPersonalizada');

// Imprimir el resultado
echo "Intersección basada en valores y claves:\n";
print_r($resultado);

?>
