<?php
// Ejemplo 1: Imprimir cada elemento de un array
$array1 = ["manzana", "plátano", "cereza"];
echo "Ejemplo 1: Imprimir elementos del array\n";
array_walk($array1, function($valor, $clave) {
    echo "Elemento [$clave]: $valor\n";
});
// Resultado: Imprime cada fruta con su índice


// Ejemplo 2: Modificar los elementos del array
$array2 = [1, 2, 3];
array_walk($array2, function(&$valor, $clave) {
    $valor *= 2; // Multiplica cada elemento por 2
});
echo "Ejemplo 2: Array después de modificar\n";
print_r($array2);
// Resultado: [2, 4, 6]


// Ejemplo 3: Usar un array asociativo
$array3 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
echo "Ejemplo 3: Imprimir elementos del array asociativo\n";
array_walk($array3, function($valor, $clave) {
    echo "$clave: $valor\n";
});
// Resultado: Imprime cada clave y su valor


// Ejemplo 4: Modificar un array asociativo
$array4 = ["a" => 1, "b" => 2, "c" => 3];
array_walk($array4, function(&$valor, $clave) {
    $valor += 10; // Suma 10 a cada valor
});
echo "Ejemplo 4: Array asociativo después de modificar\n";
print_r($array4);
// Resultado: ["a" => 11, "b" => 12, "c" => 13]


// Ejemplo 5: Usar un array con claves numéricas y valores asociados
$array5 = ["a" => 1, "b" => 2, "c" => 3];
$prefijo = "Valor: ";
array_walk($array5, function(&$valor, $clave) use ($prefijo) {
    $valor = $prefijo . $valor; // Agrega un prefijo a cada valor
});
echo "Ejemplo 5: Array con prefijo\n";
print_r($array5);
// Resultado: ["a" => "Valor: 1", "b" => "Valor: 2", "c" => "Valor: 3"]

?>
