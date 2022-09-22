<?php 
    /**
     * ! To unset() a global variable inside of a function, then use the $GLOBALS array to do so:
     */

    function foo() {
        unset($GLOBALS['bar']);
    } 
    
    $bar = "something";
    foo();
    echo $bar;
?>