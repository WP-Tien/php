<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ử dụng các hàm chuỗi</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	// "\n" chỉ tao ra dòng mới khi bạn chạy trên cửa sổ dòng lệnh Command Prompt. Trên Command Prompt bạn chuyển tới thư mục có chứa tập tin cần chạy sử dụng lệnh cd và chạy câu lệnh sau php 3.0Sudungcachamchuoi.php
	echo "\n";
	echo trim("        No worries.") ."\n";
	echo substr("No worries.", 3,7) ."\n";
	echo "\" worries \" starts at position ". strpos("No worries.", "worries") ."\n";
	echo ucfirst("no worries") ."<br>";
	echo "\" No worries. \" is ". strlen("No worries.") ." characters long.\n";
	echo substr_replace("no worries", "problems.", 3, 8) ."<br>";
	echo chr(65), chr(66), chr(67) ."<br>";
	echo strtoupper("No worries") ."<br>";
	?>
</body>
</html>