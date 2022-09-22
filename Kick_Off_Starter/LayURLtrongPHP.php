<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy URL trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$url = "https://www.youtube.com/watch?v=N__BmkkusrE";
		$url = parse_url($url);
		echo "Scheme :". $url['scheme'] ."</br>";
		echo "Host :". $url['host'] ."</br>";
		echo "Path :". $url['path'] ."</br>";
	?>
</body>
</html>