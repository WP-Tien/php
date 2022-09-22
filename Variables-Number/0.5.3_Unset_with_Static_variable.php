<?php 

    /**
     * ! If a static variable is unset() inside of a function, unset() destroys the variable only in the context of the rest of a function. Following calls woll restore the previous value of a variable.
     */

    function foo() 
    {
        static $bar;
        $bar ++;
        echo "Before unset: $bar, ";
        unset($bar);

        $bar = 23;
        echo "After unset: $bar <br>";
    }

foo(); // Before unset: 1, After unset: 23 
foo(); // Before unset: 2, After unset: 23 
foo(); // Before unset: 3, After unset: 23
    
?>