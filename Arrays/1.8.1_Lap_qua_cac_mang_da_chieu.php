<?php
	$test_scores["Frank"]["first"] = 95;
	$test_scores["Frank"]["second"] = 85;
	$test_scores["Mary"]["first"] = 87;
	$test_scores["Mary"]["second"] = 93;
	
	foreach ( $test_scores as $outer_key => $single_array){
		foreach ($single_array as $inner_key => $value) {
			echo "\$test_scores[$outer_key][$inner_key] = $value </br>";
		}
	}

?>