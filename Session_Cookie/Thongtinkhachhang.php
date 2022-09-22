<html>
	<head>
		<meta charset="utf-8">
	</head>
	<?php
		$ten = $_POST["txtTen"];
		$email = $_POST["txtEmail"];
		$diachi = $_POST["txtDiachi"];
		
	?>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<th colspan="2"> THÔNG TIN KHÁCH HÀNG <th>
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
					<td> Địa chỉ: </td>
					<td> <input name="txtDiachi" type="text" placeholder="Nhập tên đăng nhập" /> </td>
				</tr>
				<tr>
					<td colspan> <input type="submit" value="Xác nhận " /> </td>
				</tr>
			</table>
		</form>
		<?php
			if($_POST)
			{
				setcookie("txtTen", $_POST["txtTen"], time() + 3600);
				setcookie("txtEmail", $_POST["txtEmail"], time() + 3600);
				setcookie("txtDiachi", $_POST["txtDiachi"], time() + 3600);
				?>Thông tin khách hàng</br>
				<?php echo "$ten - $email"; ?></br>
				<?php echo "$diachi"; ?> </br>
				<a href="doc_cookie_thongtinkhachhang.php">Click here!</a>
				<?php
			}
		?>
	</body>
</html>