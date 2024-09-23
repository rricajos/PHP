<?php
// ArrayObject_STD_PROP_LIST.php

// Create an array with example data
$array = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'Wonderland'
];

// Create an instance of ArrayObject
$arrayObject = new ArrayObject($array);

// Set the STD_PROP_LIST flag
$arrayObject->setFlags(ArrayObject::STD_PROP_LIST);

// Access elements as properties
echo "Name: {$arrayObject->name}\n";  // Outputs: Name: Alice
echo "Age: {$arrayObject->age}\n";    // Outputs: Age: 30
echo "City: {$arrayObject->city}\n";  // Outputs: City: Wonderland

// Modify a property
$arrayObject->name = 'Bob';
echo "Updated Name: {$arrayObject->name}\n";  // Outputs: Updated Name: Bob

// Add a new "property"
$arrayObject->country = 'Wonderland';
echo "Country: {$arrayObject->country}\n";  // Outputs: Country: Wonderland

// Use the getArrayCopy() method
$copy = $arrayObject->getArrayCopy();
print_r($copy);  // Outputs the array representation

?>
