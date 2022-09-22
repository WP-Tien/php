<?php 
	$local_fruits = array("apple" ,"pomegranate" ,"orange");
	$tropical_fruits = array("pineapple" ,"pomegranate" ,"papaya");

	//Phần khác nhau giữa 2 mảng
	$difference = array_diff($local_fruits, $tropical_fruits);
	foreach ($difference as $value)
	{
		echo $value ."<br>";
	}

	//Phần tử giống nhau giữa 2 mảng
	$common = array_intersect($local_fruits, $tropical_fruits);

	echo "<pre>", print_r($common) ,"</pre>";
?>