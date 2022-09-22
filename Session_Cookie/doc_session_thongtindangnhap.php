<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<?php
	SESSION_START();
	?>
	<body>
	Xin chào <?php echo $_SESSION["txtTen"];?></br>
	Tên đăng nhập <?php echo $_SESSION["txtTaikhoan"]; ?></br>
	<a href="Thongtindangnhap.php"> Quay trở về trang ĐĂNG NHẬP </a>
	
	</body>
</html>