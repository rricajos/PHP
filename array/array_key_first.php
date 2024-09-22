<?php
// Ejemplo 1: Usar array_key_first con un array simple
$array1 = ["manzana", "plátano", "cereza"];
$primera_clave1 = array_key_first($array1);
echo "Ejemplo 1: Primera clave de array simple\n";
echo "Primera clave: $primera_clave1\n"; 
// Resultado: 0


// Ejemplo 2: Usar array_key_first con un array asociativo
$array2 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
$primera_clave2 = array_key_first($array2);
echo "Ejemplo 2: Primera clave de array asociativo\n";
echo "Primera clave: $primera_clave2\n"; 
// Resultado: nombre


// Ejemplo 3: Usar array_key_first con un array vacío
$array3 = [];
$primera_clave3 = array_key_first($array3);
echo "Ejemplo 3: Primera clave de array vacío\n";
echo "Primera clave: " . ($primera_clave3 === null ? "No hay claves" : $primera_clave3) . "\n"; 
// Resultado: No hay claves


// Ejemplo 4: Usar array_key_first después de modificar el array
$array4 = ["a" => 1, "b" => 2, "c" => 3];
array_shift($array4); // Elimina el primer elemento
$primera_clave4 = array_key_first($array4);
echo "Ejemplo 4: Primera clave después de modificar el array\n";
echo "Primera clave: $primera_clave4\n"; 
// Resultado: b

?>
