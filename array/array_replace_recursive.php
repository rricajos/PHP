<?php
// Ejemplo 1: Reemplazar valores en un array simple
$array1 = ["a" => "manzana", "b" => "banana"];
$array2 = ["b" => "cereza", "c" => "durazno"];
$resultado1 = array_replace_recursive($array1, $array2);
echo "Ejemplo 1 (Reemplazar valores en un array simple):\n";
print_r($resultado1); // Resultado: ["a" => "manzana", "b" => "cereza", "c" => "durazno"]

// Ejemplo 2: Reemplazar valores en arrays anidados
$array3 = [
    "frutas" => ["a" => "manzana", "b" => "banana"],
    "verduras" => ["a" => "lechuga"]
];
$array4 = [
    "frutas" => ["b" => "cereza"],
    "verduras" => ["a" => "espinaca", "b" => "zanahoria"]
];
$resultado2 = array_replace_recursive($array3, $array4);
echo "\nEjemplo 2 (Reemplazar valores en arrays anidados):\n";
print_r($resultado2);
/*
Resultado:
Array
(
    [frutas] => Array
        (
            [a] => manzana
            [b] => cereza
        )

    [verduras] => Array
        (
            [a] => espinaca
            [b] => zanahoria
        )
)
*/

// Ejemplo 3: Reemplazar valores en un array con diferentes niveles de anidamiento
$array5 = [
    "frutas" => [
        "a" => "manzana",
        "b" => ["x" => "plátano", "y" => "kiwi"]
    ]
];
$array6 = [
    "frutas" => [
        "b" => ["y" => "sandía"],
        "c" => "durazno"
    ]
];
$resultado3 = array_replace_recursive($array5, $array6);
echo "\nEjemplo 3 (Reemplazar valores en un array con diferentes niveles de anidamiento):\n";
print_r($resultado3);
/*
Resultado:
Array
(
    [frutas] => Array
        (
            [a] => manzana
            [b] => Array
                (
                    [x] => plátano
                    [y] => sandía
                )

            [c] => durazno
        )
)
*/

// Ejemplo 4: Reemplazar valores con un array vacío
$array7 = ["a" => "uno", "b" => "dos"];
$array8 = [];
$resultado4 = array_replace_recursive($array7, $array8);
echo "\nEjemplo 4 (Reemplazar valores con un array vacío):\n";
print_r($resultado4); // Resultado: ["a" => "uno", "b" => "dos"]

// Ejemplo 5: Reemplazar valores de un array con una clave inexistente
$array9 = ["x" => "valor1", "y" => "valor2"];
$array10 = ["z" => "nuevo valor"];
$resultado5 = array_replace_recursive($array9, $array10);
echo "\nEjemplo 5 (Reemplazar valores de un array con una clave inexistente):\n";
print_r($resultado5); // Resultado: ["x" => "valor1", "y" => "valor2", "z" => "nuevo valor"]
?>
