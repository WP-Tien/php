<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hiển thị các số trong khoảng (200,250) mà chia hết cho 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		echo implode(",",range(200,250,4))."<br>";
	?>
</body>
</html>