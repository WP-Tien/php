<?php
ob_start();
$buffer = str_repeat(" ", 4096)."\r\n<span></span>\r\n";

for( $i = 0; $i < 25; $i ++ ){
    echo $buffer . $i;
    ob_flush();
    flush();
    sleep(1);
}

ob_end_flush();
?>
