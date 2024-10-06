<?php

$arrayObject = new ArrayObject(['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry']);

$iteratorClass = $arrayObject->getIteratorClass();

echo "The class of iterator is: $iteratorClass\n";

// Usar el iterador para recorrer el ArrayObject
$iterator = $arrayObject->getIterator();
while ($iterator->valid()) {
    echo "Key: " . $iterator->key() . ", Value: " . $iterator->current() . "\n";
    $iterator->next(); // Avanzar al siguiente elemento
}


