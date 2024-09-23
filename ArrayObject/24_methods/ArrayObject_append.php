<?php
// ArrayObject_append.php

// Create an instance of ArrayObject
$arrayObject = new ArrayObject();

// Append elements to the ArrayObject
$arrayObject->append('Apple');
$arrayObject->append('Banana');
$arrayObject->append('Cherry');

// Output the current elements
echo "Current elements in ArrayObject:\n";
foreach ($arrayObject as $value) {
    echo "- {$value}\n";  // Outputs: Apple, Banana, Cherry
}

// Append another element
$arrayObject->append('Date');
echo "\nAfter appending 'Date':\n";
foreach ($arrayObject as $value) {
    echo "- {$value}\n";  // Outputs: Apple, Banana, Cherry, Date
}

// Use getArrayCopy() to display the underlying array
$copy = $arrayObject->getArrayCopy();
print_r($copy);  // Outputs the array representation
?>
