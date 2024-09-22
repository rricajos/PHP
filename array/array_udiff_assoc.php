<?php
// ['c' => 'verde']
array_udiff_assoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'],
  ['a' => 'rojo', 'b' => 'gris', 'd' => 'amarillo'],
  function ($a, $b) {
    return strcmp($a, $b);
  }
);

// ['x' => 1]
array_udiff_assoc(
  ['x' => 1, 'y' => 2, 'z' => 3],
  ['y' => 2, 'z' => 4],
  function ($a, $b) {
    return $a - $b;
  }
);

// ['b' => 'perro']
array_udiff_assoc(
  ['a' => 'gato', 'b' => 'perro', 'c' => 'pez'],
  ['a' => 'gato', 'b' => 'ratón'],
  function ($a, $b) {
    return strcmp($a, $b);
  }
);

// ['c' => 'verde']
array_udiff_assoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'],
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'amarillo'],
  function ($a, $b) {
    return strcmp($a, $b);
  }
);

// ['a' => 'uno']
array_udiff_assoc(
  ['a' => 'uno', 'b' => 'dos'],
  ['b' => 'dos', 'c' => 'tres'],
  function ($a, $b) {
    return strcmp($a, $b);
  }
);

// ['gato' => 'peludo']
array_udiff_assoc(
  ['gato' => 'peludo', 'perro' => 'ladrador'],
  ['gato' => 'liso'],
  function ($a, $b) {
    return strcmp($a, $b);
  }
);
