<?php 
    /**
     * array_shift -- Shift an element off the beginning of array.
     * array_shift() shifts the first value of the array off and returns it, shortening the array by one element and moving everything down. All numerical array keys will be modified  to start counting from zero while literal keys won't be touched.
     * * This function will reset() the array of the input array after use.
     * @param array
     * @return Returns the shifted value or NULL if array is empty or is not an array.
     */

    echo "<h2> First example </h2>";

    $stack = array( "orange", "banana", "apple", "raspberry" );

    echo "<pre>", print_r($stack) ,"</pre>";
    
    $fruit = array_shift($stack);

    echo "<pre>", print_r($stack) ,"</pre>";
?>