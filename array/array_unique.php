<?php
$array = [1, "1", 2, "2", "apple", "Apple"];

setlocale(LC_ALL, 'es_ES'); // Configuración regional en español
$locale = ["á", "a", "b", "Á", "A", "B"];

// Uso con diferentes modos:
$unique_default = array_unique($array); // SORT_STRING (predeterminado)
$unique_regular = array_unique($array,  SORT_REGULAR);
$unique_numeric = array_unique($array,  SORT_NUMERIC);
$unique_locale  = array_unique($locale,  SORT_LOCALE_STRING);

// Imprimir resultados
print_r($unique_default); // [1, 2, "apple", "Apple"]
print_r($unique_regular); // [1, "1", 2, "2", "apple", "Apple"]
print_r($unique_numeric); // [1, 2, "apple", "Apple"]
print_r($unique_locale); 
/* Array (
    [0] => á
    [1] => a
    [2] => b
    [4] => A
    [5] => B
)*/

?>
