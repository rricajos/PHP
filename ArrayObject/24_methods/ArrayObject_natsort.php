<?php // This file is for the method: natsort

// Choose natsort() when the original case of the 
// strings matters and use natcasesort() when you want 
// to ignore case for a more uniform sorting approach.

// Create an ArrayObject with unordered elements
$arrayObject = new ArrayObject([
  'file10.txt',
  'file2.txt',
  'file1.txt',
  'file12.txt',
  'File11.txt',
  'file3.txt'
]);

// Display the content before sorting
echo "Before natsort:\n";
foreach ($arrayObject as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Apply natsort to sort in natural order
$arrayObject->natsort(); // Sorts by values in natural order

// Display the content after sorting
echo "\nAfter natsort:\n";
foreach ($arrayObject as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
