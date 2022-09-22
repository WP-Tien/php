<?php 

    /**
     * unset() destroys the specified variables.
     * @param var the variable to be unset.
     *  The behavior of unset() inside of a function can vary depending on what type of variable you are attempting to destroy.
     * If a globalized variable is unset() inside of a function, only the loval variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called.
     */

    function destroy_foo()
    {
        global $foo;
        unset($foo);
    }

    $foo = 'bar';
    destroy_foo(); // affter uses this function to destroy $foo. 
    echo $foo; // wasn't change; will retain. 

?>