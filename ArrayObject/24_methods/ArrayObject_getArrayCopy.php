<?php
// ArrayObject_getArrayCopy.php

// Create an initial associative array
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

// Get a copy of the underlying array
$arrayCopy = $arrayObject->getArrayCopy();

// Output the copied array
echo "\nCopied Array:\n";
print_r($arrayCopy);

// Modify the original ArrayObject
$arrayObject->name = 'Bob';
$arrayObject['country'] = 'Wonderland';

// Output the modified ArrayObject
echo "\nModified ArrayObject:\n";
print_r($arrayObject);

// Output the copied array again to show it remains unchanged
echo "\nCopied Array After Modification:\n";
print_r($arrayCopy);
?>
