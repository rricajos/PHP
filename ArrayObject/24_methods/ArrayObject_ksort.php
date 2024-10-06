<?php

// This file is for the method: ksort


// Create an ArrayObject with unordered elements
$arrayObject = new ArrayObject([
    'b' => 'Banana',
    'a' => 'Apple',
    'c' => 'Cherry'
]);


// Apply ksort to sort by keys
$arrayObject->ksort(); // Sort by keys

// Display the content after sorting
echo "\nAfter ksort:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
