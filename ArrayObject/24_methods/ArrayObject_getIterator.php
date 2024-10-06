<?php

// Crear un ArrayObject
$arrayObject = new ArrayObject(['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry']);

// Obtener el iterador
$iterator = $arrayObject->getIterator();
var_dump($iterator);

// Usar el iterador para recorrer el ArrayObject
while ($iterator->valid()) {
    echo "Key: " . $iterator->key() . ", Value: " . $iterator->current() . "\n";
    $iterator->next(); // Avanzar al siguiente elemento
}

