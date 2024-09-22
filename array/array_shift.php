<?php
// Ejemplo 1: Eliminar el primer elemento de un array numérico
$mi_array1 = array(10, 20, 30, 40);
$primer_elemento1 = array_shift($mi_array1);
echo "Ejemplo 1 (Eliminar el primer elemento de un array numérico):\n";
echo "Elemento eliminado: $primer_elemento1\n";
print_r($mi_array1);


// Ejemplo 2: Eliminar el primer elemento de un array asociativo
$mi_array2 = array("a" => "manzana", "b" => "banana", "c" => "cereza");
$primer_elemento2 = array_shift($mi_array2);
echo "\nEjemplo 2 (Eliminar el primer elemento de un array asociativo):\n";
echo "Elemento eliminado: $primer_elemento2\n";
print_r($mi_array2);


// Ejemplo 3: Usar array_shift en un array vacío
$mi_array3 = array();
$primer_elemento3 = array_shift($mi_array3);
echo "\nEjemplo 3 (Eliminar el primer elemento de un array vacío):\n";
echo "Elemento eliminado: " . ($primer_elemento3 === null ? "null" : $primer_elemento3) . "\n";
print_r($mi_array3);


// Ejemplo 4: Usar array_shift en un array multidimensional
$mi_array4 = array(
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30)
);
$primer_elemento4 = array_shift($mi_array4);
echo "\nEjemplo 4 (Eliminar el primer elemento de un array multidimensional):\n";
print_r($primer_elemento4);
print_r($mi_array4);


// Ejemplo 5: Repetir el uso de array_shift
$mi_array5 = array("uno", "dos", "tres", "cuatro");
while (!empty($mi_array5)) {
    $elemento = array_shift($mi_array5);
    echo "\nEjemplo 5 (Eliminar elementos uno por uno): Elemento eliminado: $elemento\n";
    print_r($mi_array5);
}
?>
