<?php 

function foobar($arg, $arg2){
	echo "<br>";
	echo __FUNCTION__, " got $arg and $arg2";
	echo "<br>";
}

class foo{
	function bar($arg, $arg2){
		echo "<br>";
		echo __METHOD__, " got $arg and $arg2";
		echo "<br>";
	}
}

// call_user_func_array( "foobar", array("one","two") );
call_user_func_array( "foobar", array("one", "two") );

// call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array( array( $foo, "bar" ), array( "three", "four" ) );

?>