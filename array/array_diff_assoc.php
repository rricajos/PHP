<?php
// ['a' => 'rojo', 'c' => 'verde']
array_diff_assoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul', 'd' => 'amarillo']
);

// ['a' => 'rojo']
array_diff_assoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul'], 
  ['c' => 'verde']
);

// [1 => 'uno', 3 => 'tres', 5 => 'cinco']
array_diff_assoc(
  [1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 5 => 'cinco'], 
  [2 => 'dos', 4 => 'cuatro']
);

// ['a' => 1, 'c' => 3]
array_diff_assoc(
  ['a' => 1, 'b' => 2, 'c' => 3], 
  ['b' => 2, 'd' => 4]
);

// [0 => 'gato', 2 => 'pez']
array_diff_assoc(
  ['gato', 'perro', 'pez'], 
  [1 => 'perro']
);

// ['a' => 'rojo', 'c' => 'verde']
array_diff_assoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul', 'd' => 'amarillo']
);
?>
