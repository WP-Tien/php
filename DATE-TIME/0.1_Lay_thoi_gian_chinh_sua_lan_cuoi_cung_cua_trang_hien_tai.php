<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy thời gian chỉnh sửa lần cuối cùng của trang hiện tại</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		echo "Last modified: ". date("F d Y H:i:s.",getlastmod()) ."<br>";
	?>
</body>
</html>