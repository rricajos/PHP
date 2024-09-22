<?php

$array = [
    'Name' => 'John',
    'AGE' => 25,
    'Country' => 'USA',
];

// Cambiar claves a minúsculas
$lowercaseKeys = array_change_key_case($array, CASE_LOWER);

// Cambiar claves a mayúsculas
$uppercaseKeys = array_change_key_case($array, CASE_UPPER);

// Mostrar resultados
echo "Original Array:\n";
print_r($array);

echo "\nLowercase Keys:\n";
print_r($lowercaseKeys);

echo "\nUppercase Keys:\n";
print_r($uppercaseKeys);
?>
