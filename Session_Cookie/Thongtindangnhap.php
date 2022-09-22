<html>
	<head>
		<meta charset="utf-8">
	</head>
	<?php
		SESSION_START();
		$ten = $_POST["txtTen"];
		$email = $_POST["txtEmail"];
		$taikhoan = $_POST["txtTaikhoan"];
		$password = $_POST["txtPassword"];
		
	?>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<th colspan="2"> THÔNG TIN ĐĂNG NHẬP <th>
				</tr>
				<tr>
					<td> Họ và tên: </td>
					<td> <input name="txtTen" type="text" placeholder="Nhập họ và tên" /> </td>
				</tr>
				<tr>
					<td> Email: </td>
					<td> <input name="txtEmail" type="text" placeholder="Nhập email" /> </td>
				</tr>
				<tr>
					<td> Tên đăng nhập: </td>
					<td> <input name="txtTaikhoan" type="text" placeholder="Nhập tên đăng nhập" /> </td>
				</tr>
				<tr>
					<td> Mật khẩu: </td>
					<td> <input name="txtPassword" type="text" placeholder="Nhập mật khẩu" /> </td>
				</tr>
				<tr>
					<td colspan> <input name="txtEmail" type="submit" value="Đăng nhập" /> </td>
				</tr>
			</table>
		</form>
		<?php
			if($_POST)
			{
				$_SESSION["txtTen"] = $ten;
				$_SESSION["txtEmail"] = $email;
				$_SESSION["txtTaikhoan"] = $taikhoan;
				$_SESSION["txtPassword"] = $password;
				?>Xin chào <?php echo "$ten"; ?></br>
				Email <?php echo "$email"; ?></br>
				Tên đăng nhập <?php echo "$taikhoan"; ?> </br>
				Mật khẩu <?php echo "$password"; ?> </br>
				<a href="doc_session_thongtindangnhap.php">Click here!</a>
				<?php
			}
		?>
	</body>
</html>