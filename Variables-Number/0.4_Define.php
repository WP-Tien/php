<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>
		Using PHP constants
	</title>
</head>
<body>
	<h1>
		Using PHP constants
	</h1>
	<?php  
		define ("pi", 3.14);
		define ("Thai", "khùng");

		echo Thai . "</br>";
		echo "The constant pi holds " , pi, "<br>";
	?>
</body>
</html>
