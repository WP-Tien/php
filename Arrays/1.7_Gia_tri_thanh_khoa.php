<?php 
$local_fruits = array("fruit1" => "apple", "fruit2" => "pomegrante", "fruit3" => "orange");

echo "<pre>", print_r($local_fruits) ,"</pre>";


$local_fruits = array_flip($local_fruits);

echo "<pre>", print_r($local_fruits) ,"</pre>";
?>