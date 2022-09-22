<?php
	$test_scores[0][] = 95;
	$test_scores[0][] = 85;
	$test_scores[1][] = 87;
	$test_scores[1][] = 93;

	for ($outer_index = 0; $outer_index < count($test_scores); $outer_index ++){
		for ($inner_index = 0; $inner_index < count($test_scores[$outer_index]); $inner_index ++){
			echo "\$test_scores[$outer_index][$inner_index] = ", $test_scores[$outer_index][$inner_index],"</br>";
		}
	}

?>