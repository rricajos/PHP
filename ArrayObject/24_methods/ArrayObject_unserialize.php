<?php // This file is for the method: __unserialize


// Create an ArrayObject and serialize it
$arrayObject = new ArrayObject([
    'name' => 'Ricky',
    'age' => 23,
    'city' => 'Barcelona'
]);
$serializedData = $arrayObject->serialize();

// Display the serialized data
echo "Serialized Data:\n";
echo $serializedData . "\n\n";

// Now, unserialize the data back into an ArrayObject
$restoredArrayObject = new ArrayObject();
$restoredArrayObject->unserialize($serializedData);

// Display the unserialized ArrayObject
echo "Unserialized ArrayObject:\n";
foreach ($restoredArrayObject as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
