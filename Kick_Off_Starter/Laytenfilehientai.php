<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy tên file hiện tại</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$ten_file_hien_tai = basename($_SERVER['PHP_SELF']);
	echo "Tên file hiện tại là: $ten_file_hien_tai.";
	?>
</body>
</html>