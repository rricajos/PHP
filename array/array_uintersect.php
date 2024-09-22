<?php

// Definir la función de comparación
function comparar($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Definir los arrays de ejemplo
$array1 = array("a" => 100, "b" => 200, "c" => 300);
$array2 = array("a" => 300, "b" => 200, "c" => 400);
$array3 = array("a" => 100, "d" => 200, "e" => 500);

// Usar array_uintersect para encontrar la intersección
$resultado = array_uintersect($array1, $array2, $array3, 'comparar');

// Imprimir el resultado
echo "Valores comunes:\n";
print_r($resultado);

?>
