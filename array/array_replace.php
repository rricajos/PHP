<?php
// Ejemplo 1: Reemplazar valores en un array numérico
$array1 = array("a", "b", "c");
$array2 = array(1 => "x", 2 => "y");
$resultado1 = array_replace($array1, $array2);
echo "Ejemplo 1 (Reemplazar valores en un array numérico):\n";
print_r($resultado1); // Resultado: ["a", "x", "y"]


// Ejemplo 2: Reemplazar valores en un array asociativo
$array3 = array("color" => "rojo", "forma" => "cuadrado");
$array4 = array("forma" => "círculo", "tamaño" => "grande");
$resultado2 = array_replace($array3, $array4);
echo "\nEjemplo 2 (Reemplazar valores en un array asociativo):\n";
print_r($resultado2); // Resultado: ["color" => "rojo", "forma" => "círculo", "tamaño" => "grande"]


// Ejemplo 3: Reemplazar con un array vacío
$array5 = array("a" => "uno", "b" => "dos");
$array6 = array();
$resultado3 = array_replace($array5, $array6);
echo "\nEjemplo 3 (Reemplazar con un array vacío):\n";
print_r($resultado3); // Resultado: ["a" => "uno", "b" => "dos"]


// Ejemplo 4: Usar múltiples arrays para reemplazo
$array7 = array("a" => "apple", "b" => "banana");
$array8 = array("b" => "blueberry");
$array9 = array("a" => "avocado", "c" => "cherry");
$resultado4 = array_replace($array7, $array8, $array9);
echo "\nEjemplo 4 (Usar múltiples arrays para reemplazo):\n";
print_r($resultado4); // Resultado: ["a" => "avocado", "b" => "blueberry", "c" => "cherry"]


// Ejemplo 5: Reemplazar valores con claves no existentes
$array10 = array("x" => "valor1", "y" => "valor2");
$array11 = array("z" => "nuevo valor");
$resultado5 = array_replace($array10, $array11);
echo "\nEjemplo 5 (Reemplazar valores con claves no existentes):\n";
print_r($resultado5); // Resultado: ["x" => "valor1", "y" => "valor2", "z" => "nuevo valor"]


// Ejemplo 6: Reemplazar valores en un array con claves duplicadas
$array12 = array("a" => "manzana", "b" => "banana");
$array13 = array("a" => "cereza", "b" => "naranja");
$resultado6 = array_replace($array12, $array13);
echo "\nEjemplo 6 (Reemplazar valores en un array con claves duplicadas):\n";
print_r($resultado6); // Resultado: ["a" => "cereza", "b" => "naranja"]
?>
