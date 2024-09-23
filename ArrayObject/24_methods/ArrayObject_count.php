<?php
// ArrayObject_count.php

// Create an associative array with initial values
$array = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'Wonderland'
];

// Create an instance of ArrayObject using the constructor
$arrayObject = new ArrayObject($array);

// Output the initial state of the ArrayObject
echo "Initial ArrayObject:\n";
print_r($arrayObject);

// Get the count of elements in the ArrayObject
$count = count($arrayObject);
echo "Number of elements in ArrayObject: {$count}\n";  // Outputs: Number of elements in ArrayObject: 3

// Add a new element to the ArrayObject
$arrayObject['country'] = 'Wonderland';
echo "After adding a new element:\n";
print_r($arrayObject);

// Get the updated count of elements
$updatedCount = count($arrayObject);
echo "Updated number of elements in ArrayObject: {$updatedCount}\n";  // Outputs: Updated number of elements in ArrayObject: 4
?>
