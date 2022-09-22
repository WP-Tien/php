<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Email validation</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST">
		<h2>Nhập địa chỉ email:</h2>
		<input type="text" name="email">
		<input type="submit" name="" value="Kiểm tra">
	</form>

	<?php
		// Truyển vào địa chỉ email hợp lệ/không hợp lệ
		if($_POST)
		{
			$email = $_POST["email"];
			if(filter_var($email, FILTER_VALIDATE_EMAIL))	
			{
				echo '"'. $email .'" is a valid email address' ."</br>";
			}
			else 
			{
				echo '"'. $email .'" isn\'t a valid email address' ."</br>";
			}
		}
	?>
</body>
</html>