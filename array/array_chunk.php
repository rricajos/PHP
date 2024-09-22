<?php
// Array de ejemplo
$array = ["patata", "mango", "papaya"]; 

// Tamaños de chunk que vamos a probar
$chunkSizes = [1, 2];

foreach ($chunkSizes as $size) {
    echo "Chunk size: $size\n";
    $chunks = array_chunk($array, $size);
    print_r($chunks);
    echo "\n";
}

/* 
> php .\array_chunk.php

Chunk size: 1
Array
(
    [0] => Array
        (
            [0] => patata
        )

    [1] => Array
        (
            [0] => mango
        )

    [2] => Array
        (
            [0] => papaya
        )

)

Chunk size: 2
Array
(
    [0] => Array
        (
            [0] => patata
            [1] => mango
        )

    [1] => Array
        (
            [0] => papaya
        )

)

*/
?>
