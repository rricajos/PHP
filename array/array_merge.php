<?php
// Ejemplo 1: Combinar dos arrays numéricos
$mi_array1 = array(1, 2, 3);
$mi_array2 = array(4, 5, 6);
$resultado1 = array_merge($mi_array1, $mi_array2);
echo "Ejemplo 1 (Combinar dos arrays numéricos):\n";
print_r($resultado1);


// Ejemplo 2: Combinar arrays con claves asociativas (claves duplicadas son sobreescritas)
$mi_array3 = array("nombre" => "Juan", "edad" => 25);
$mi_array4 = array("nombre" => "Ana", "ciudad" => "Madrid");
$resultado2 = array_merge($mi_array3, $mi_array4);
echo "\nEjemplo 2 (Combinar arrays asociativos, claves duplicadas):\n";
print_r($resultado2);


// Ejemplo 3: Combinar arrays numéricos y asociativos
$mi_array5 = array(1, 2, 3);
$mi_array6 = array("a" => "manzana", "b" => "banana");
$resultado3 = array_merge($mi_array5, $mi_array6);
echo "\nEjemplo 3 (Combinar arrays numéricos y asociativos):\n";
print_r($resultado3);


// Ejemplo 4: Combinar varios arrays a la vez
$mi_array7 = array("rojo", "verde");
$mi_array8 = array("azul", "amarillo");
$mi_array9 = array("negro", "blanco");
$resultado4 = array_merge($mi_array7, $mi_array8, $mi_array9);
echo "\nEjemplo 4 (Combinar tres arrays a la vez):\n";
print_r($resultado4);


// Ejemplo 5: Combinar arrays con claves numéricas y preservarlas (usar array_merge_recursive)
$mi_array10 = array(1 => "manzana", 2 => "banana");
$mi_array11 = array(1 => "pera", 3 => "uva");
$resultado5 = array_merge_recursive($mi_array10, $mi_array11);
echo "\nEjemplo 5 (Combinar arrays con array_merge_recursive):\n";
print_r($resultado5);
?>
