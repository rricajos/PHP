<?php // This file is for the method: ArrayObject_setFlags

// Posible flags:
// ArrayObject_ARRAY_AS_PROPS
// ArrayObject_STD_PROP_LIST


// Create an ArrayObject
$arrayObject = new ArrayObject([
    'name' => 'Alice',
    'age' => 25,
    'city' => 'Los Angeles'
]);

// Set the ArrayObject flags
$arrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);

// Access values as properties
echo "Name: " . $arrayObject->name . "\n"; // Outputs: Name: Alice
echo "Age: " . $arrayObject->age . "\n";   // Outputs: Age: 25
echo "City: " . $arrayObject->city . "\n"; // Outputs: City: Los Angeles

// Display the current flags
$flags = $arrayObject->getFlags();
echo "Current flags: $flags\n";
