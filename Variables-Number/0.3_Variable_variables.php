<!DOCTYPE html>
<html>
<head>
	<title>
		Using variable variables
	</title>
</head>
<body>
	<h1>
		Using variable variables
	</h1>
	<?php 
		$apples = 4;
		$oranges = 3;
		$fruitname = "oranges";

		echo "Number of oranges: ${$fruitname} <br>";

		$fruitname = "apples";

		echo "Number of apples: ${$fruitname} <br>";
	 ?>
</body>
</html>