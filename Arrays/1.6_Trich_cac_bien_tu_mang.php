<?php
// Mảng qua biến extract
$fruits["good"] = "tangerine";
$fruits["better"] = "pineapple";
$fruits["best"] = "pomegranate";

extract($fruits);

echo "\$good = $good<br>";
echo "\$better = $better<br>";
echo "\$best = $best<br>";

$vegetables = array("corn", "broccoli", "zucchini");

list($frist, $second, $third) = $vegetables; // khóa là số ?
echo $frist, "<br>";
echo $second, "<br>";
echo $third, "<br>";

// Biến quá mảng compact
$frist_name = "Gray";
$last_name = "Grant";
$role = "Actor";

$resultarray = compact("role", "frist_name", "last_name");

echo "<pre>", print_r($resultarray) ,"</pre>";

$subarray = array("frist_name", "last_name");
$resultarray = compact("role", $subarray);

echo "<pre>", print_r($resultarray) ,"</pre>";

?>