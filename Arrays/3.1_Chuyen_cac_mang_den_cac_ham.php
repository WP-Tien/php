<?php 
	$fruits[0] = "pineapple";
	$fruits[1] = "pomegranate";
	$fruits[2] = "tangerine";
	$fruits[3] = "watermelon";

	array_echoer($fruits);

	function array_echoer($array)
	{
		for ($i = 0 ; $i < count($array) ; $i ++)
		{
			echo "Element $i: ". $array[$i] ."<br>";
		}
	}

	echo "<hr>";

	$test_scores[0] = 98;
	$test_scores[1] = 36;
	$test_scores[2] = 54;
	$test_scores[3] = 64;
	array_averager($test_scores);

	function array_averager($scores)
	{
		$total = 0;
		for ($i = 0; $i < count($scores); $i++)
		{
			$total += $scores[$i];
		}
		echo "Average score = ". $total/count($scores);
	}

?>