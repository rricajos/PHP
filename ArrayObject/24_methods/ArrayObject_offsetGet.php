<?php // This file is for the method: offsetGet


// Create an ArrayObject
$arrayObject = new ArrayObject([
  'a' => 'Apple',
  'b' => 'Banana',
  'c' => 'Cherry'
]);

// Define keys to retrieve values
$keyToGet1 = 'b';

// Using offsetGet to retrieve values
$value1 = $arrayObject->offsetGet($keyToGet1);
$value2 = $arrayObject->offsetGet($keyToGet2);

// Display retrieved values
echo "Value for key '$keyToGet1': $value1\n"; 
