<?php // This file is for the method: ArrayObject_uksort

// Create an ArrayObject with unsorted keys
$arrayObject = new ArrayObject([
    'b' => 'Banana',
    'a' => 'Apple',
    'd' => 'Date',
    'c' => 'Cherry'
]);

// Define a comparison function for sorting keys (ascending alphabetical order)
$comparisonFunction = function ($key1, $key2) {
    return strcmp($key1, $key2); // Sort alphabetically by keys
};

// Use uksort() to sort the ArrayObject by keys
$arrayObject->uksort($comparisonFunction);

// Display the sorted ArrayObject
echo "Sorted ArrayObject by keys:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
