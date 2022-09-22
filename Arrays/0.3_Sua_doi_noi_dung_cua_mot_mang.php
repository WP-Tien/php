<?php
	$fruits[0] = "pineapple";
	$fruits[1] = "pomegranate";
	$fruits[2] = "tangerinte";

	$fruits[2] = "watermelon";

	$fruits[] = "grapes";

	for ($index=0; $index < count($fruits); $index ++)
	{
		echo $fruits[$index] ,"<br>";
	}
?>