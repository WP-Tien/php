<?php 
    // destroy a single variable 
    $foo = 123;
    // unset($foo);

    // destroy a single element of an array 
    $arr = array("quuz");
    // unset($arr);

    // destroy more than one variable or array
    $barr = 323;
    $xyz = 321;
    unset($barr, $xyz, $arr);
    
    // destroy a SESSION
    $session = $_SESSION['session'] = 123;

    unset($_SESSION['session']); // destroy the SESSION 
    unset($session); // destroy the session variable

    // print_r($_SESSION['session']);
    // print_r($session);
?>