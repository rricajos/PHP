<?php // This file is for the method: ArrayObject_serialize

// Create an ArrayObject
$arrayObject = new ArrayObject([
  'name' => 'John',
  'age' => 30,
  'city' => 'New York'
]);

// Serialize the ArrayObject
$serializedData = $arrayObject->serialize();

// Display the serialized data
echo "Serialized ArrayObject:\n";
echo $serializedData;
