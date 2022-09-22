<?php 
	$fruits[0] = "pineapple";
	$fruits[1] = "pomegranate";
	$fruits[2] = "tangerine";

	// Loại bỏ phần tử mảng bằng cách set bằng ""
	$fruits[1] = "";
	
	// unset($fruits[1]);

	for($index = 0; $index < count($fruits); $index ++)
	{
		echo $fruits[$index] ,"<br>";
	}
?>