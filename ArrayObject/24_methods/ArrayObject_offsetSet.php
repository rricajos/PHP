<?php // This file is for the method: ArrayObject_offsetSet


// Create an ArrayObject
$arrayObject = new ArrayObject([
  'a' => 'Apple',
  'b' => 'Banana',
  'c' => 'Cherry'
]);

// Display the content before setting new values
echo "Before offsetSet:\n";
foreach ($arrayObject as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Change existing key
$arrayObject->offsetSet('b', 'Blueberry');

// Add new key
$arrayObject->offsetSet('d', 'Durian');

// Display the content after setting new values
echo "\nAfter offsetSet:\n";
foreach ($arrayObject as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
