<?php
// Ejemplo 1: Imprimir elementos de un array multidimensional
$array1 = [
    "frutas" => ["manzana", "plátano", "cereza"],
    "verduras" => ["zanahoria", "lechuga"]
];

echo "Ejemplo 1: Imprimir elementos del array multidimensional\n";
array_walk_recursive($array1, function($valor, $clave) {
    echo "$clave: $valor\n";
});
// Resultado: Imprime cada clave y valor en el array multidimensional


// Ejemplo 2: Modificar los elementos del array multidimensional
$array2 = [
    "numeros" => [1, 2, 3],
    "mas_numeros" => [4, 5, 6]
];

array_walk_recursive($array2, function(&$valor, $clave) {
    $valor *= 2; // Multiplica cada elemento por 2
});
echo "Ejemplo 2: Array multidimensional después de modificar\n";
print_r($array2);
// Resultado: "numeros" => [2, 4, 6], "mas_numeros" => [8, 10, 12]


// Ejemplo 3: Usar un array multidimensional con claves asociativas
$array3 = [
    ["nombre" => "Carlos", "edad" => 25],
    ["nombre" => "Ana", "edad" => 30]
];

echo "Ejemplo 3: Imprimir elementos del array asociativo multidimensional\n";
array_walk_recursive($array3, function($valor, $clave) {
    echo "$clave: $valor\n";
});
// Resultado: Imprime cada clave y valor en el array asociativo multidimensional


// Ejemplo 4: Añadir un sufijo a cada elemento del array multidimensional
$array4 = [
    "colores" => ["rojo", "verde", "azul"],
    "formas" => ["círculo", "cuadrado"]
];

array_walk_recursive($array4, function(&$valor, $clave) {
    $valor .= " (sufijo)"; // Añade un sufijo a cada valor
});
echo "Ejemplo 4: Array multidimensional con sufijo\n";
print_r($array4);
// Resultado: "colores" => ["rojo (sufijo)", "verde (sufijo)", "azul (sufijo)"], "formas" => ["círculo (sufijo)", "cuadrado (sufijo)"]

?>
