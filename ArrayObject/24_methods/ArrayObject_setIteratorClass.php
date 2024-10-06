<?php // This file is for the method: ArrayObject_setIteratorClass


// Define a custom iterator class that extends ArrayIterator
class MyCustomIterator extends ArrayIterator {

    // Add the ReturnTypeWillChange attribute to suppress the PHP 8 notice
    #[\ReturnTypeWillChange]
    public function rewind() {
        echo "Rewinding the iterator...\n";
        parent::rewind();
    }

    #[\ReturnTypeWillChange]
    public function current() {
        return strtoupper(parent::current());
    }
}

// Create an ArrayObject
$arrayObject = new ArrayObject(['apple', 'banana', 'cherry']);


// Set the custom iterator class
$arrayObject->setIteratorClass(MyCustomIterator::class);

// Iterate over the ArrayObject using the custom iterator
foreach ($arrayObject as $value) {
    echo $value . "\n"; // Outputs: APPLE, BANANA, CHERRY
}

