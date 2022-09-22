<?php
$vegetables = array("corn","broccoli","zucchini");

echo "<pre>", print_r($vegetables) ,"</pre>";

$text = implode(", ", $vegetables);

echo $text;

$chuoi = "corn, broccoli, zucchini";

$mang = explode(", ", $chuoi);

echo "<pre>", print_r($mang) ,"</pre>";

?>