<?php 
    // thay thế chuỗi

    $input = array("red", "green", "blue", "yellow"); 

    $index = array_search("red", $input);

    // echo $index;

    $output = array_splice($input, $index, 1, array("My value"));

    print_r($input);
?>