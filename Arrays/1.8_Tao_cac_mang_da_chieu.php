<?php 
/*	
	$test_scores["Frank"] = 95;
	$test_scores["Mary"] = 87;
*/
/*	$test_scores["Frank"][1] = 95;
	$test_scores["Frank"][2] = 85;
	$test_scores["Mary"][1] = 87;
	$test_scores["Mary"][2] = 93;
*/
/*	$test_scores["Frank"][] = 95;
	$test_scores["Frank"][] = 85;
	$test_scores["Mary"][] = 87;
	$test_scores["Mary"][] = 93;
*/
/*	$test_scores = array("Frank" => array(95,85), "Mary" => array(87,93));
*/
	$test_scores = array("Frank" => array(1 => 95, 2 =>85), "Mary" => array(1 => 87, 2=> 93));

 	echo "<pre>";
 	print_r($test_scores);
 	echo "</pre>";

 	echo "Frank's first test score is ", $test_scores["Frank"][1]. "\n";




?> 