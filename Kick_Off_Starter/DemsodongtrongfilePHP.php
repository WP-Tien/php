<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đếm số dòng trong file PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$file = basename($_SERVER['PHP_SELF']);
		$so_dong = count(file($file));
		echo "Có $so_dong dòng trong $file. </br>";
	?>
</body>
</html>