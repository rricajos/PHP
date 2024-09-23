<?php
// ArrayObject_asort.php

// Create an associative array with unsorted values
$array = [
    'fruit1' => 'Banana',
    'fruit2' => 'Apple',
    'fruit3' => 'Cherry',
    'fruit4' => 'Date'
];

// Create an instance of ArrayObject
$arrayObject = new ArrayObject($array);

// Output the original array
echo "Original Array:\n";
print_r($arrayObject);

// Sort the array using asort() to maintain index association
$arrayObject->asort();

// Output the sorted array
echo "\nSorted Array (asort):\n";
foreach ($arrayObject as $key => $value) {
    echo "{$key}: {$value}\n";  // Outputs sorted fruits
}

// Use getArrayCopy() to display the underlying array
$copy = $arrayObject->getArrayCopy();
print_r($copy);  // Outputs the array representation
?>
