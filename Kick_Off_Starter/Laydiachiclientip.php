<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lấy địa chỉ Client Ip trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		//Kiểm tra xem IP có phải là từ Share Internet
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];
		}
		//Kiểm tra xem IP có phải từ Proxy
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		//kiểm tra xem IP có phải là từ Remote Address
		else
		{
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}
		echo "Địa chỉ Client IP là: $ip_address";
	?>
</body>
</html>