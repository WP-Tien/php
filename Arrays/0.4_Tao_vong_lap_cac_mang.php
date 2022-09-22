<?php 

	$fruits[0] = "pineapple";
	$fruits[1] = "pomegranate";
	$fruits[2] = "tangerine";
	// Dùng for
	for ($index = 0; $index < count($fruits); $index ++)
	{
		echo $fruits[$index] ,"<br>";
	}

	// print_r($fruits)
	echo "<pre>", print_r($fruits) ,"</pre>";
	
	// DÙng foreach
	foreach($fruits as $value)
	{
		echo  $value ,"<br>";
	}

	echo "<br>";

	foreach($fruits as $key => $value)
	{
		echo "Key: ",$key ," value: ", $value, "<br>"; 
	}


?>