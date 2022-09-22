<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đỗi màu của kí tự đầu tiên của từ</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$text = "Stack overflow";
		$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>', $text);
		echo $text;
	?>
</body>
</html>