<?php
// Ejemplo 1: Calcular el producto de un array de enteros positivos
$mi_array1 = array(2, 3, 4);
$producto1 = array_product($mi_array1);
echo "Ejemplo 1 (Enteros positivos):\n";
echo "Producto: $producto1\n";

// Ejemplo 2: Calcular el producto de un array que contiene un 0
$mi_array2 = array(5, 0, 10);
$producto2 = array_product($mi_array2);
echo "\nEjemplo 2 (Contiene un 0):\n";
echo "Producto: $producto2\n";

// Ejemplo 3: Calcular el producto de un array con números decimales
$mi_array3 = array(1.5, 2.5, 3.5);
$producto3 = array_product($mi_array3);
echo "\nEjemplo 3 (Números decimales):\n";
echo "Producto: $producto3\n";

// Ejemplo 4: Producto de un array vacío (debe devolver 1, ya que es el valor neutro de la multiplicación)
$mi_array4 = array();
$producto4 = array_product($mi_array4);
echo "\nEjemplo 4 (Array vacío):\n";
echo "Producto: $producto4\n";
?>
