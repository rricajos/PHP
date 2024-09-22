<?php
// Ejemplo 1: Usar array_key_last con un array simple
$array1 = ["manzana", "plátano", "cereza"];
$ultima_clave1 = array_key_last($array1);
echo "Ejemplo 1: Última clave de array simple\n";
echo "Última clave: $ultima_clave1\n"; 
// Resultado: 2


// Ejemplo 2: Usar array_key_last con un array asociativo
$array2 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
$ultima_clave2 = array_key_last($array2);
echo "Ejemplo 2: Última clave de array asociativo\n";
echo "Última clave: $ultima_clave2\n"; 
// Resultado: ciudad


// Ejemplo 3: Usar array_key_last con un array vacío
$array3 = [];
$ultima_clave3 = array_key_last($array3);
echo "Ejemplo 3: Última clave de array vacío\n";
echo "Última clave: " . ($ultima_clave3 === null ? "No hay claves" : $ultima_clave3) . "\n"; 
// Resultado: No hay claves


// Ejemplo 4: Usar array_key_last después de modificar el array
$array4 = ["a" => 1, "b" => 2, "c" => 3];
array_pop($array4); // Elimina el último elemento
$ultima_clave4 = array_key_last($array4);
echo "Ejemplo 4: Última clave después de modificar el array\n";
echo "Última clave: $ultima_clave4\n"; 
// Resultado: b

?>
