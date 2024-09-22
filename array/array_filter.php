<?php

// Ejemplo 1: Usar array_filter sin función de callback
$array1 = [0, 1, 2, 3, 4, 0, 5];
$result1 = array_filter($array1);
echo "Ejemplo 1: Sin callback (valores verdaderos)\n";
print_r($result1); // Filtra valores falsos (0)



// Ejemplo 2: Usar array_filter con una función de callback
$array2 = [1, 2, 3, 4, 5, 6];
$result2 = array_filter($array2, function($value) {
    return $value % 2 === 0; // Filtra solo los números pares
});
echo "\nEjemplo 2: Con callback (números pares)\n";
print_r($result2);



// Ejemplo 3: Usar array_filter con un segundo parámetro
$array3 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$result3 = array_filter($array3, function($value, $key) {
    return $value > 2; // Filtra valores mayores que 2
}, ARRAY_FILTER_USE_BOTH);

echo "\nEjemplo 3: Con callback y ARRAY_FILTER_USE_BOTH (claves y valores)\n";
print_r($result3); // Retorna los elementos cuyas claves son mayores que 2



// Ejemplo 4: Usar array_filter con ARRAY_FILTER_USE_KEY
$array4 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$result4 = array_filter($array4, function($key) {
    return in_array($key, ['b', 'd']); // Filtra solo las claves 'b' y 'd'
}, ARRAY_FILTER_USE_KEY);

echo "\nEjemplo 4: Con ARRAY_FILTER_USE_KEY (filtrar por claves)\n";
print_r($result4); // Retorna solo los elementos con claves 'b' y 'd'

?>
