<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy thông tin hệ điều hành trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		echo php_uname()."<br>";
		echo PHP_OS."<br>";

		if(strtoupper(substr(PHP_OS, 0, 3)) == "WIN") 
		{
			echo 'Server đang sử dụng Windowns!';
		}
		else
		{
			echo 'Đây không phải là Server đang sử dụng Windows!' ."<br>";
		}

	?>
</body>
</html>