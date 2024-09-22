<?php
// Ejemplo 1: Verificar si un valor existe en un array simple
$array1 = ["manzana", "plátano", "cereza"];
$valor1 = "plátano";
$existe1 = in_array($valor1, $array1);
echo "Ejemplo 1: Verificar valor '$valor1'\n";
echo $existe1 ? "El valor existe.\n" : "El valor no existe.\n"; 
// Resultado: El valor existe.


// Ejemplo 2: Verificar un valor que no existe
$valor2 = "pera";
$existe2 = in_array($valor2, $array1);
echo "Ejemplo 2: Verificar valor '$valor2'\n";
echo $existe2 ? "El valor existe.\n" : "El valor no existe.\n"; 
// Resultado: El valor no existe.


// Ejemplo 3: Usar in_array con un array numérico
$array2 = [1, 2, 3, 4, 5];
$valor3 = 3;
$existe3 = in_array($valor3, $array2);
echo "Ejemplo 3: Verificar valor '$valor3' en array numérico\n";
echo $existe3 ? "El valor existe.\n" : "El valor no existe.\n"; 
// Resultado: El valor existe.


// Ejemplo 4: Verificar un valor en un array con claves asociativas
$array3 = ["nombre" => "Carlos", "edad" => 25, "ciudad" => "Madrid"];
$valor4 = 25;
$existe4 = in_array($valor4, $array3);
echo "Ejemplo 4: Verificar valor '$valor4' en array asociativo\n";
echo $existe4 ? "El valor existe.\n" : "El valor no existe.\n"; 
// Resultado: El valor existe.


// Ejemplo 5: Usar in_array con el parámetro de tipo estricto
$array4 = ["10", "20", "30"];
$valor5 = 10;
$existe5 = in_array($valor5, $array4, true); // El tercer parámetro establece la comparación estricta
echo "Ejemplo 5: Verificar valor '$valor5' con comparación estricta\n";
echo $existe5 ? "El valor existe.\n" : "El valor no existe.\n"; // Resultado: El valor no existe.

?>
