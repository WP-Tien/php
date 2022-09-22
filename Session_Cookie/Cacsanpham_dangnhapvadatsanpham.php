<html>
	<head>
		<meta charset="utf-8">
	</head>
	<?php
		SESSION_START();
		$sp = $_POST["sp"];
		$diachigh = $_POST["txtDiachigiaohang"];
	?>
	<body>
		<form action="" method="post">
			<table>
				<caption>
					<p> Chào <?php echo $_SESSION["ten_dang_nhap"];?> </p>
				</caption>
				<tr>
					<th colspan="2"> CÁC SẢN PHẨM <th>
				</tr>
				<tr>
					<td> Chúng tôi có: </td>
					<td> 
						<select name="sp">
							<option value="Mokara"> Mokara</option>
							<option value="Thiên nga"> Thiên nga</option>
							<option value="Ngọc điểm - lai châu"> Ngọc điểm - Lai Châu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Địa chỉ giao hàng: </td>
					<td> <input name="txtDiachigiaohang" type="text" placeholder="Nhập email" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input name="txtEmail" type="submit" value="Đặt hàng" /> </td>
				</tr>
			</table>
		</form>
		<?php
			if($_POST)
			{
				$_SESSION["sp"] = $sp;
				$_SESSION["txtDiachigiaohang"] = $diachigh;
				?>Bạn đã đặt <?php echo "$sp"; ?></br>
				Chũng tôi sẽ giao hàng bạn tại địa chỉ: <?php echo "$diachigh"; ?> . Cảm ơn bạn !</br>
				<a href="Dangnhapvadatsanpham.php">Quay lại !</a>
				<?php
			}
		?>
	</body>
</html>