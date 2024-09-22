<?php
/* 
array_is_list() es una función útil para verificar 
si un array cumple con las características de una 
lista en PHP, es decir, si sus claves son numéricas, 
secuenciales y comienzan desde 0. Esto hace que 
la validación de arrays en PHP sea más clara y eficiente. 

previamente a laversion 8.1de php tendriamos que hacer algo asi:
function is_list($array) {
    return array_keys($array) === range(0, count($array) - 1);
}
*/

$array1 = [0 => 'a', 1 => 'b', 2 => 'c'];
var_dump(array_is_list($array1));
// Resultado: bool(true)


$array2 = [1 => 'a', 2 => 'b', 3 => 'c'];
var_dump(array_is_list($array2));
// Resultado: bool(false)


$array3 = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_is_list($array3));
// Resultado: bool(false)


$array4 = [0 => 'a', 'b' => 'value', 2 => 'c'];
var_dump(array_is_list($array4));
// Resultado: bool(false)


$array5 = [];
var_dump(array_is_list($array5)); 
// Resultado: bool(true)
