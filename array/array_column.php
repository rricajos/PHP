<?php
$array = [
  ['id' => 32, 'name' => 'Juan', 'age' => 25],
  ['id' => 64, 'name' => 'Fer', 'age' => 30],
  ['id' => 128, 'name' => 'Richard', 'age' => 22],
];

// Obtener todos los nombres
print_r(
  array_column($array, 'name')
);

// Obtener todos las edades con el nombre como indice
print_r(
  array_column($array, 'age', 'name')
);

// Obtener todos las nombres con el id como indice
print_r(
  array_column($array, 'name', 'id')
);

?>
