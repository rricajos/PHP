<?php
// ArrayObject_construct.php

// Create an associative array with initial values
$array = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'Wonderland'
];

// Create an instance of ArrayObject using the constructor (new)
$arrayObject = new ArrayObject($array);

// Output the initial state of the ArrayObject
echo "Initial ArrayObject:\n";
print_r($arrayObject);

// Access elements as properties
echo "Name: {$arrayObject->name}\n";  // Outputs: Name: Alice
echo "Age: {$arrayObject->age}\n";    // Outputs: Age: 30
echo "City: {$arrayObject->city}\n";  // Outputs: City: Wonderland

// Modify a property
$arrayObject->name = 'Bob';
echo "Updated Name: {$arrayObject->name}\n";  // Outputs: Updated Name: Bob

// Use getArrayCopy() to display the underlying array
$copy = $arrayObject->getArrayCopy();
print_r($copy);  // Outputs the array representation

