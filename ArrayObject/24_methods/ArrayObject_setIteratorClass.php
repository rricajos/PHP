<?php // This file is for the method: ArrayObject_setIteratorClass


// Define a custom iterator class
class MyCustomIterator extends IteratorIterator {
  
    public function rewind() {
        echo "Rewinding the iterator...\n";
        parent::rewind();
    }

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

