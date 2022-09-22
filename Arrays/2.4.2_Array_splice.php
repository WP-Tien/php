<?php 
    /**
     * ! Áp dụng array_splice với các method khác
     */

    $input = array("red", "blue", "yellow", "black");
    
    // append two elements to $input 
    // array_push($input, "white", "green");
    // array_splice($input, count($input), 0, array("white", "gray") );

    // remove the last element of $input 
    // array_pop($input);
    // array_splice($input, -1);

    // remove the first element of $input 
    // array_shift($input);
    // array_splice($input, 0, 1);

    // insert an element at the start of $input 
    // array_unshift($input, "first", "second");
    // array_splice($input, 0, 0, array( "first", "second"));
        
    // replace the value in $input at index $x
    // $input["0"] = "first";
    array_splice($input, 0, 1, "New");

    print_r($input);
?>