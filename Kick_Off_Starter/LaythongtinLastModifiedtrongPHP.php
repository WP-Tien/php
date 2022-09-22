<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy thông tin Last Modified trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$ten_file_hien_tai = basename($_SERVER['PHP_SELF']);
	$file_last_modified = filemtime($ten_file_hien_tai);
	echo "Last Modified: " . date("l, dS, Y, h:ia", $file_last_modified)."</br>";
	?>
</body>
</html>