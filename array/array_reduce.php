<?php
// Ejemplo 1: Sumar todos los elementos de un array
$array1 = [1, 2, 3, 4, 5];
$suma = array_reduce($array1, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "Ejemplo 1 (Sumar todos los elementos): $suma\n"; // Resultado: 15

// Ejemplo 2: Concatenar cadenas en un array
$array2 = ["Hola", " ", "mundo", "!"];
$frase = array_reduce($array2, function($carry, $item) {
    return $carry . $item;
}, "");
echo "Ejemplo 2 (Concatenar cadenas): $frase\n"; // Resultado: "Hola mundo!"

// Ejemplo 3: Encontrar el valor máximo en un array
$array3 = [5, 3, 8, 1, 4];
$maximo = array_reduce($array3, function($carry, $item) {
    return ($carry > $item) ? $carry : $item;
});
echo "Ejemplo 3 (Encontrar el valor máximo): $maximo\n"; // Resultado: 8

// Ejemplo 4: Contar ocurrencias de elementos en un array
$array4 = ["manzana", "banana", "manzana", "naranja", "banana"];
$contador = array_reduce($array4, function($carry, $item) {
    if (!isset($carry[$item])) {
        $carry[$item] = 0;
    }
    $carry[$item]++;
    return $carry;
}, []);
echo "Ejemplo 4 (Contar ocurrencias):\n";
print_r($contador); // Resultado: Array ( [manzana] => 2 [banana] => 2 [naranja] => 1 )

// Ejemplo 5: Calcular el producto de los elementos de un array
$array5 = [1, 2, 3, 4];
$producto = array_reduce($array5, function($carry, $item) {
    return $carry * $item;
}, 1);
echo "Ejemplo 5 (Calcular el producto): $producto\n"; // Resultado: 24

// Ejemplo 6: Crear un array asociativo a partir de dos arrays
$claves = ["nombre", "edad", "ciudad"];
$valores = ["Alice", 30, "Madrid"];
$array_asociativo = array_reduce($claves, function($carry, $item) use ($valores) {
    $carry[$item] = array_shift($valores);
    return $carry;
}, []);
echo "Ejemplo 6 (Crear un array asociativo):\n";
print_r($array_asociativo); // Resultado: Array ( [nombre] => Alice [edad] => 30 [ciudad] => Madrid )
?>
