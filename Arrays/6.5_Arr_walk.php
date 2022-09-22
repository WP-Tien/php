<?php 
// https://www.php.net/manual/en/function.array-walk.php

$fruits = [ 'd' => 'lemon',
            'a' => 'orange',
            'b' => 'banana',
            'c' => 'apple'
        ];

function test_alter( &$item, $key, $prefix ) {
    $item = "$prefix: $item";
}

function test_print( $item, $key ) {
    echo "$key. $item \n";
}

echo "Before ...:\n";

array_walk( $fruits, 'test_print' );

array_walk( $fruits, 'test_alter', 'Fruit' );

echo "After ...:\n";

array_walk( $fruits, 'test_print' );