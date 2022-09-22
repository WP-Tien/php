<!DOCTYPE html>
<html>
<head>
	<title>Using the foreach loop</title>
</head>
<body>
<h1>Using the foreach loop</h1>
<?php 
$arr = array("apple","oranges","bananas");

foreach ($arr as $value) {
	echo "Current fruit: $value</br>";
	}


echo "<hr/>";

for ($i = 0; $i < count($arr); $i++)
{
	echo " $arr[$i] ";	// $arr[0]
}

echo "<hr/>";
?>


<!-- Ngắt khỏi vòng lặp dùng BREAK -->
<?php 
	for ($loop_counter = 0; $loop_counter < 5; $loop_counter++ ){
		echo "I'm going to do this five times unless stopped! </br>";
		if($loop_counter == 2){
			echo "Enough already, I'm quitting.</br>";
			break;
		}
	}
 ?>
</body>
</html>