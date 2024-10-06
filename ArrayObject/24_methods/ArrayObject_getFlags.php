<?php

// ArrayObject_getFlags.php

// Setting the intern array and flags to getFlags()
$array_as_props = new ArrayObject(['name' => 'ricky'], ArrayObject::ARRAY_AS_PROPS);
$std_prop_list = new ArrayObject(['name' => 'rocky'], ArrayObject::STD_PROP_LIST);

// Setting new props bouth
$array_as_props->age = 23;
$std_prop_list->age = 23;

// The key of question - Where are the props?
echo "ARRAY_AS_PROPS flag - ArrayObject Properties:\n";
print_r(get_object_vars($array_as_props)); 

echo "\n\n\nARRAY_AS_PROPS flag - ArrayObject Intern Array:\n";
print_r($array_as_props->getArrayCopy()); 

echo "\n\n\nSTD_PROP_LIST flag - ArrayObject Properties:\n";
print_r(get_object_vars($std_prop_list)); 

echo "\n\n\nSTD_PROP_LIST flag - ArrayObject Intern Array:\n";
print_r($std_prop_list->getArrayCopy()); 


