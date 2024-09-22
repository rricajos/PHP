<?php

$keys = ['a', 'b', 'c', 'd'];
$values = [1, 2, 3, 4];

try {

  $combined = array_combine($keys, $values);
  print_r($combined);

} catch (\Throwable $th) {

  echo "\nError: Los arrays deben tener la misma longitud!\n\n";
  echo "arr_keys: " . print_r($keys, true) . "\n";
  echo "arr_values: " . print_r($values, true) . "\n";
  
}

?>
