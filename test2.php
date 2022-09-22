<?php 


$obj = [
    'data'=>  [
        'a' => 'b'
    ],
    'next' => [
        'paging' => '123'
    ]
];

$obj2 = [
    'data'=>  [
        'a' => 'b'
    ]
];


if( isset( $obj2['next']['paging'] ) ) {
    print_r( 'done' );
}