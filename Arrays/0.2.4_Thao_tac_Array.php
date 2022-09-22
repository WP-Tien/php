<?php
    // thêm vào thì trả về length, lấy ra giá trị đã lấy.

    $arr = ["apple", "mango", "kiwi", "organe"];

    $arr_shift = array_shift($arr); // : apple
    // "mango", "kiwi", "organe"

    echo "<pre>";
    print_r($arr); 
    echo "</pre>";

    $arr_unshift = array_unshift( $arr, 'cherry' ); // : 4
    // "cherry", "mango", "kiwi", "organe"

    $arr_push = array_push( $arr, 'pear' ); // : 5
    // "cherry", "mango", "kiwi", "organe", "pear"

    $arr_pop = array_pop( $arr );
    // "cherry", "mango", "kiwi", "organe"

    echo "<pre>";
    print_r($arr_pop); 
    echo "</pre>";
?>