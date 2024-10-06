<?php // This file is for the method: ArrayObject_offsetUnset


// Create an ArrayObject
$arrayObject = new ArrayObject([
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'Cherry'
]);


// Display the content before removing a value
echo "Before offsetUnset:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}


// Remove a value using offsetUnset
$arrayObject->offsetUnset('b'); // Remove key 'b'


// Display the content after removing a value
echo "\nAfter offsetUnset:\n";
foreach ($arrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
