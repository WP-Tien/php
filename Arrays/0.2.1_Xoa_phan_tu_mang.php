<html>
	<head>
		<title> Xóa phần tử mảng </title>		
	</head>
	<body>
		<?php 
			$x =  array(0,1,2,3,4);

			var_dump($x);

			// Xóa phần tử mảng bằng phương thức unset, *Lưu ý khi dùng unset dùng vòng lập sẽ lỗi.
			unset($x[3]);

			// trả về khóa 0 -> ... theo số values 
			// $x = array_values($x);

			echo '';

			echo '<pre>';
			print_r($x);
			echo '</pre>';
		?>
	</body>

</html>