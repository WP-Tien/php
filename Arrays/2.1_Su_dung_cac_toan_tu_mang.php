<html>
	<head>
		<title>Using array operators</title>
	</head>
	<body>
		<h1>Using array operators</h1>
		<?php
		$fruits["apples"] = 3839;
		$fruits["oranges"] = 2289;
		$vegetable["broccoli"] = 1991;
		$vegetable["corn"] = 9195;
		
		echo "\$fruits: ";
		print_r($fruits);
		echo "</br>"; 
		
		echo "\$vegetable";
		print_r($vegetable);
		echo "</br>";

		$produce = $fruits + $vegetable;
		echo "\$produce";
		print_r($produce);
		echo "</br>";

		if($fruits == $vegetable){
			echo "\$fruits has the same elements as \$vegetable </br>";
		}
		else {
			echo "It has not the same elements";
		}

		?>
	</body>
</html>