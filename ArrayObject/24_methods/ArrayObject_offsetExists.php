<?php // This file is for the method: ArrayObject_offsetExists

// Create an ArrayObject
$arrayObject = new ArrayObject([
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'Cherry'
]);

// Check if certain keys exist
$keyToCheck1 = 'b';
$keyToCheck2 = 'd';

// Using offsetExists to check for key existence
if ($arrayObject->offsetExists($keyToCheck1)) {
    echo "Key '$keyToCheck1' exists in the ArrayObject.\n";
} else {
    echo "Key '$keyToCheck1' does not exist in the ArrayObject.\n";
}

if ($arrayObject->offsetExists($keyToCheck2)) {
    echo "Key '$keyToCheck2' exists in the ArrayObject.\n";
} else {
    echo "Key '$keyToCheck2' does not exist in the ArrayObject.\n";
}

