<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy Source code của một trang web trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$all_lines = file('http://vietjack.com/');
		foreach($all_lines as $line_num => $line)
		{
			//echo "Dòng thứ {$line_num}: " . htmlspecialchars($line) . "<br>";
			echo "<pre>";
			print_r(htmlspecialchars($line));
			echo "</pre>";
		}
	?>
</body>
</html>