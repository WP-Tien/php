<html>
	
	<head>
		<title>Khai báo và tạo mảng trong PHP</title>
	</head>
	<body>
		<?php 	
			//Khai báo và tạo mảng
			$color = array('white', 'green', 'red', 'blue', 'black');

			// sử dụng vòng lập foreach để lập qua các phần tử mảng
			foreach ($color as $c) {
				echo "$c, ";
			}

			//sắp xếp các phần tử mảng
			sort($color);

			echo "<br>";
			foreach ($color as $c) {
				echo "$c, ";
			}

		?>
	</body>
</html>