<?php
// ArrayObject_exchangeArray.php

// Create an initial associative array
$initialArray = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'Wonderland'
];

// Create an instance of ArrayObject using the constructor
$arrayObject = new ArrayObject($initialArray);

// Output the initial state of the ArrayObject
echo "Initial ArrayObject:\n";
print_r($arrayObject);

// Create a new array to exchange with
$newArray = [
    'name' => 'Bob',
    'age' => 25,
    'country' => 'Wonderland'
];

// Exchange the current array with the new array
$oldArray = $arrayObject->exchangeArray($newArray);

// Output the exchanged arrays
echo "\nOld Array:\n";
print_r($oldArray);  // Outputs the old array
echo "\nNew ArrayObject after exchange:\n";
print_r($arrayObject);  // Outputs the new array
?>
