<?php
// Función de comparación de claves personalizada mediante un callback
function compararClaves($key1, $key2) {
    if ($key1 == $key2) {
        return 0;
    }
    return ($key1 > $key2) ? 1 : -1;
}

// ['a' => 'rojo', 'c' => 'verde']
array_diff_ukey(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul', 'd' => 'amarillo'], 
  'compararClaves'
);

// ['a' => 'rojo']
array_diff_ukey(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul'], 
  ['c' => 'verde'], 
  'compararClaves'
);

// [1 => 'uno', 3 => 'tres', 5 => 'cinco']
array_diff_ukey(
  [1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 5 => 'cinco'], 
  [2 => 'dos', 4 => 'cuatro'], 
  'compararClaves'
);

// ['a' => 1, 'c' => 3]
array_diff_ukey(
  ['a' => 1, 'b' => 2, 'c' => 3], 
  ['b' => 2, 'd' => 4], 
  'compararClaves'
);

// [0 => 'gato', 2 => 'pez']
array_diff_ukey(
  ['gato', 'perro', 'pez'], 
  [1 => 'perro'], 
  'compararClaves'
);

// ['a' => 'rojo', 'c' => 'verde']
array_diff_ukey(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'], 
  ['b' => 'azul', 'd' => 'amarillo'], 
  'compararClaves'
);
?>
