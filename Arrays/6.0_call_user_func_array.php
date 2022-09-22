<?php
	/** 
	 * call_user_func_array 
	 * call_user_func_array -- Call a callback with an array of parameters.
	 * @param callback The callable to be called 
	 * @param param_arr The parameters to be passed to the callback, as an indexed array. 
	 */

    function foobar($arg, $arg2){
        echo __FUNCTION__, " got $arg and $arg2 ";
    }

	class foo{
		function bar($arg, $arg2){
			echo __METHOD__, " got $arg and $arg2 ";
		}
	}

    // Call the foobar() function with 2 arguments 
    call_user_func_array("foobar", array("one", "two"));
	echo "<br>";
	// Call the $foo->bar() method with 2 arguments 
	$foo = new foo();	
	call_user_func_array(array($foo, "bar"), array("three", "four"));
?>
