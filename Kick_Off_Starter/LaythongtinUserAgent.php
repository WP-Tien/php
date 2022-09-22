<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy thông tin User Agent trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	 echo "Thông tin User Agent: bạn đang sử dụng là :" . $_SERVER['HTTP_USER_AGENT'];
	?>
</body>
</html>