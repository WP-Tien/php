<?php
$scores = array(65, 60, 70, 65, 65);
echo "<pre>", print_r($scores) ,"</pre>";

//Xóa phần tử lặp unique
$scores = array_unique($scores);
echo "<pre>", print_r($scores) ,"</pre>";

// Tổng sum
echo "Average scores = ", array_sum($scores) / count($scores);
?>