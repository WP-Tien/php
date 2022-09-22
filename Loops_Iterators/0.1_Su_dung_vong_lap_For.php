<!DOCTYPE html>
<html>
<head>
	<title>Using the for loop</title>
</head>
<body>
<h1>
	Using the for loop
</h1>
<?php 
	for ($loop_counter = 0; $loop_counter < 5; $loop_counter ++)
		echo "I'm goting to do this five times.</br>";
 ?>
 </br>
<?php 
	for ($var1 = 2, $var2 = 2; $var1 < 5 && $var2 < 5; $var1 ++, $var2 ++ )
		echo "$var1 x $var2 = ", $var1*$var2,"</br>";

	echo "<hr>";

	for ($x = 1, $y = 2, $z = 3; $x <5 || $y < 5 || $z <5 ; $x ++ , $y ++ , $z ++)
		echo "$x + $y + $z = ", $x+$y+$z ,"<br>";

	echo "<hr>";

	for ($var1 = 2; $var1 < 5; $var1 ++)
	{
		for ($var2 = 2; $var2 < 5; $var2 ++)
		{
			echo "$var1 x $var2 = ", $var1*$var2,"</br>";
		}
	}
 ?>
</body>
</html>