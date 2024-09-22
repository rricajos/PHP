<?php
// ['a', 'c']
echo array_diff(
  ['a', 'b', 'c', 'd'], 
  ['b', 'd', 'e']
);  

// ['a']
echo array_diff(
  ['a', 'b', 'c', 'd'],
  ['b', 'd', 'e'],
  ['c', 'e', 'f']
); 

// [1, 3, 5]
echo array_diff(
  [1, 2, 3, 4, 5],
  [2, 4, 6]
); 

// ['b' => 'azul']
echo array_diff(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'],
  ['x' => 'rojo', 'y' => 'verde']
); 

 // ['1', '2']
echo array_diff(
  [1, '1', 2, '2'], 
  [1, 2]
); 

// ['gato', 'perro', 'pez']
echo array_diff(
  ['gato', 'perro', 'pez'], 
  []
);  

