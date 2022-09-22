<?php 
// https://www.php.net/manual/en/function.ob-flush.php#109314

header( 'Content-type: text/html; charset=utf-8' );
echo 'Begin ... <br>/';
for ( $i = 0; $i < 10; $i ++ ) {
    ob_flush();
    echo $i . '<br />';
    flush();
    ob_flush();
    sleep(1);
}
echo 'End ...<br />';
?>