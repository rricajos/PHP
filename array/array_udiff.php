<?php
// ['a', 'c']
array_udiff(
  ['a', 'b', 'c', 'd'], 
  ['b', 'd', 'e'],
  function($a, $b) {
    return strcmp($a, $b);
  }
);  

// ['a']
array_udiff(
  ['a', 'b', 'c', 'd'],
  ['b', 'd', 'e'],
  function($a, $b) {
    return strcmp($a, $b);
  }
); 

// [1, 3, 5]
array_udiff(
  [1, 2, 3, 4, 5],
  [2, 4, 6],
  function($a, $b) {
    return $a - $b;
  }
); 

// ['b' => 'azul']
array_udiff(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'],
  ['x' => 'rojo', 'y' => 'verde'],
  function($a, $b) {
    return strcmp($a, $b);
  }
); 

// ['1', '2']
array_udiff(
  [1, '1', 2, '2'], 
  [1, 2],
  function($a, $b) {
    return $a - $b;
  }
); 

// ['gato', 'perro', 'pez']
array_udiff(
  ['gato', 'perro', 'pez'], 
  [],
  function($a, $b) {
    return strcmp($a, $b);
  }
);  

?>
