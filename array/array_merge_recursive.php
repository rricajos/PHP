<?php
// Ejemplo 1: Combinar arrays numéricos simples
$mi_array1 = array(1, 2, 3);
$mi_array2 = array(4, 5, 6);
$resultado1 = array_merge_recursive($mi_array1, $mi_array2);
echo "Ejemplo 1 (Combinar arrays numéricos simples):\n";
print_r($resultado1);


// Ejemplo 2: Combinar arrays asociativos con claves duplicadas
$mi_array3 = array("nombre" => "Juan", "edad" => 25);
$mi_array4 = array("nombre" => "Ana", "ciudad" => "Madrid");
$resultado2 = array_merge_recursive($mi_array3, $mi_array4);
echo "\nEjemplo 2 (Combinar arrays asociativos con claves duplicadas):\n";
print_r($resultado2);


// Ejemplo 3: Combinar arrays numéricos y asociativos
$mi_array5 = array(1, 2, "a" => "manzana");
$mi_array6 = array(3, 4, "a" => "pera");
$resultado3 = array_merge_recursive($mi_array5, $mi_array6);
echo "\nEjemplo 3 (Combinar arrays numéricos y asociativos):\n";
print_r($resultado3);


// Ejemplo 4: Combinar arrays multidimensionales
$mi_array7 = array(
    "info" => array("nombre" => "Carlos", "edad" => 35),
    "datos" => array("ciudad" => "Barcelona")
);
$mi_array8 = array(
    "info" => array("nombre" => "Lucía", "pais" => "España"),
    "datos" => array("ciudad" => "Madrid", "telefono" => "123456789")
);
$resultado4 = array_merge_recursive($mi_array7, $mi_array8);
echo "\nEjemplo 4 (Combinar arrays multidimensionales):\n";
print_r($resultado4);


// Ejemplo 5: Combinar arrays con valores numéricos duplicados
$mi_array9 = array(1, 2, 3);
$mi_array10 = array(1, 4, 5);
$resultado5 = array_merge_recursive($mi_array9, $mi_array10);
echo "\nEjemplo 5 (Combinar arrays con valores numéricos duplicados):\n";
print_r($resultado5);
?>
