<?php // This file is for the method: ArrayObject_natcasesort

// Choose natsort() when the original case of the 
// strings matters and use natcasesort() when you want 
// to ignore case for a more uniform sorting approach.

// Create an ArrayObject with unordered elements
$arrayObject = new ArrayObject([
    'banana',
    'Apple',
    'cherry',
    'apple',
    'Banana',
    'Cherry'
]);

// Display the content before sorting
echo "Before natcasesort:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}

// Apply natcasesort to sort in natural order, case-insensitive
$arrayObject->natcasesort(); // Sorts by values in natural order

// Display the content after sorting
echo "\nAfter natcasesort:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
