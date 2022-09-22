<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tạo form trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="" method="POST">
		<h2>Nhập tên đăng nhập:</h2>
		<input type="text" name="ten_dang_nhap">
		<input type="submit" name="" value="Đăng nhập">
	</form>
	<?php
	// Lấy nam từ chuỗi truy vấn và lưu trữ vào trong biến cục bộ
	if($_POST){
		$name = $_POST['ten_dang_nhap'];
		echo  "<h3> Chúc mừng $name đã đăng nhập thành công!</h3>";
}
	?>
</body>
</html>