<?php

// Definir los arrays de ejemplo
$array1 = array("a" => 100, "b" => 200, "c" => 300);
$array2 = array("a" => 100, "b" => 250, "c" => 300);
$array3 = array("a" => 100, "b" => 200, "d" => 300);

// Usar array_uintersect_assoc para encontrar la intersección por valores y claves
$resultado = array_uintersect_assoc($array1, $array2, $array3);

// Imprimir el resultado
echo "Intersección basada en valores y claves:\n";
print_r($resultado);

?>
