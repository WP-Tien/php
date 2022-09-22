<?php 
 
/**
 * The number_format() function formats a number grouped thousands.
 * !params $number, $decimals = 0, $dec_point = '.',  $thousand_sep = ','
 * * This function sipports one, two, or four parameters (not three).
 */

echo number_format("12345")."<br>";
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");



?>