<!DOCTYPE html>
<html>
	<head>
		<title>Using the switch statement</title>
	</head>
	<body>
		<h1>
			Using the switch statement
		</h1>
		<?php 
			$temperature = 74;
			switch ($temperature){
				case 70:
				case 71:
				case 72:
					echo "Nice weather.";break;
				case 73:
				case 74:
				case 75:
					echo "Still nice weather";break;
				case 76:
				case 77:
				case 78:
					echo "Getting warmer.";break;
				default:
					echo "temperature outside the range.";
			}
		?>
	</body>
</html>