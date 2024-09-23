<?php
// ArrayObject_iterator_class.php

// Custom iterator class that extends ArrayIterator
class CustomIterator extends ArrayIterator {
    public function current(): mixed {
        return strtoupper(parent::current()); // Convert current value to uppercase
    }
}

// Create an array with example data
$array = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'Wonderland'
];

// Create an instance of ArrayObject
$arrayObject = new ArrayObject($array);

// Set a custom iterator class
$arrayObject->setIteratorClass(CustomIterator::class);

// Iterate over the ArrayObject using the custom iterator
foreach ($arrayObject as $key => $value) {
    echo "{$key}: {$value}\n";  // Outputs values in uppercase
}
?>
