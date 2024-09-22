<?php
// ['a' => 'rojo']
array_udiff_uassoc(
  ['a' => 'rojo', 'b' => 'azul'],
  ['a' => 'rojo', 'b' => 'verde'],
  function ($a, $b) {
    return strcmp($a, $b);
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);

// ['c' => 'verde']
array_udiff_uassoc(
  ['a' => 'rojo', 'b' => 'azul', 'c' => 'verde'],
  ['b' => 'azul', 'c' => 'amarillo'],
  function ($a, $b) {
    return strcmp($a, $b);
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);

// ['y' => 3]
array_udiff_uassoc(
  ['x' => 1, 'y' => 2, 'z' => 3],
  ['x' => 1, 'y' => 4],
  function ($a, $b) {
    return $a - $b;
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);

// ['b' => 'perro']
array_udiff_uassoc(
  ['a' => 'gato', 'b' => 'perro', 'c' => 'pez'],
  ['a' => 'gato', 'b' => 'ratón'],
  function ($a, $b) {
    return strcmp($a, $b);
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);

// ['c' => 'dos']
array_udiff_uassoc(
  ['a' => 'uno', 'b' => 'dos', 'c' => 'tres'],
  ['a' => 'uno', 'b' => 'cuatro'],
  function ($a, $b) {
    return strcmp($a, $b);
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);

// ['gato' => 'peludo']
array_udiff_uassoc(
  ['gato' => 'peludo', 'perro' => 'ladrador'],
  ['gato' => 'liso'],
  function ($a, $b) {
    return strcmp($a, $b);
  },
  function ($key1, $key2) {
    return $key1 === $key2 ? 0 : -1;
  }
);
