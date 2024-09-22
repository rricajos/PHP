<?php

$array = ['apple', 'banana', 'orange', 'apple', 'banana', 'apple'];


$counted = array_count_values($array);

print_r($counted);
/*
Array
(
    [apple] => 3
    [banana] => 2
    [orange] => 1
)
*/
?>
