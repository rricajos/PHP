<?php
// Ejemplo 1: Verificar si una clave existe en un array asociativo
$array1 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
$clave1 = "edad";
$existe1 = array_key_exists($clave1, $array1);
echo "Ejemplo 1: Verificar clave '$clave1'\n";
echo $existe1 ? "La clave existe.\n" : "La clave no existe.\n"; 
// Resultado: La clave existe.


// Ejemplo 2: Verificar una clave que no existe
$clave2 = "pais";
$existe2 = array_key_exists($clave2, $array1);
echo "Ejemplo 2: Verificar clave '$clave2'\n";
echo $existe2 ? "La clave existe.\n" : "La clave no existe.\n"; 
// Resultado: La clave no existe.


// Ejemplo 3: Verificar una clave en un array numérico
$array2 = [10, 20, 30];
$clave3 = 1;
$existe3 = array_key_exists($clave3, $array2);
echo "Ejemplo 3: Verificar clave '$clave3' en array numérico\n";
echo $existe3 ? "La clave existe.\n" : "La clave no existe.\n";
// Resultado: La clave existe.


// Ejemplo 4: Verificar una clave en un array vacío
$array3 = [];
$clave4 = "cualquier_clave";
$existe4 = array_key_exists($clave4, $array3);
echo "Ejemplo 4: Verificar clave '$clave4' en array vacío\n";
echo $existe4 ? "La clave existe.\n" : "La clave no existe.\n"; 
// Resultado: La clave no existe.


// Ejemplo 5: Usar array_key_exists con un array que tiene claves numéricas
$array4 = ["a" => 1, 0 => 2, 1 => 3];
$clave5 = 0;
$existe5 = array_key_exists($clave5, $array4);
echo "Ejemplo 5: Verificar clave '$clave5' en array con claves numéricas\n";
echo $existe5 ? "La clave existe.\n" : "La clave no existe.\n"; 
// Resultado: La clave existe.

?>
