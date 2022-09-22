<!DOCTYPE html>
<html>
	<head>
		<title>Thanh toán tiền điện</title>
		<meta charset="UTF-8">
	</head>
	<?php
	// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		$ten ='';
		$socu = '';
		$somoi = '';
		$gia = '';
		$kq = '';
		
		if($_POST)
		{		
		$socu = $_POST["txtCu"];
		$somoi = $_POST["txtMoi"];
		$ten = $_POST["txtTen"];
		$kq="";
		
		$kq = ($somoi -$socu) * $_POST["txtGia"] ;
		}
	?>
	<body>
		<form action="" method="post">
			<table width="500" border="0" align="center">
				<tr>
					<th colspan="2"> THANH TOÁN TIỀN ĐIỆN </th>
				</tr>
				<tr>
					<td> Tên chủ hộ: </td>
					<td><input name="txtTen" type="text" value="<?php echo $ten;?>" /> </td>
				</tr>
				<tr>
					<td> Chỉ số cũ: </td>
					<td> <input name="txtCu" type="text" value="<?php echo $socu;?>" /> </td>
				</tr>
				<tr>
					<td> Chỉ số Mới: </td>
					<td> <input name="txtMoi" type="text" value="<?php echo $somoi;?>"/> </td>
				</tr>
				<tr>
					<td> Đơn giá: </td>
					<td> <input name="txtGia" type="text" value="<?php echo $gia;?>"/> </td>
				</tr>
				<tr>
					<td> Số tiền thanh toán: </td>
					<td> <input type="text" readonly value="<?php echo $kq;?>" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" value="Tính"  /></td>
				</tr>
			</table>
		</form>
	</body>
</html>