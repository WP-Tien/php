<html>
	<head>
		<title> Đọc số </title>
		<meta charset="UTF-8" >
	</head>
	<?php

	$chu = "";
	$so  = "";

	if ($_POST) {
		$so = $_POST["txtSo"];
		
		if(isset($_POST["sbmSubmit"]))
		{
			switch($so)
			{
				case 1:
					$chu = "Một";
					break;
				case 2:
					$chu = "Hai";
					break;
				case 3:
					$chu = "Ba";
					break;
				case 4:
					$chu = "Bốn";
					break;
				case 5:
					$chu = "Năm";
					break;
				case 6:
					$chu = "Sáu";
					break;
				case 7:
					$chu = "Bảy";
					break;
				case 8:
					$chu = "Tám";
					break;
				case 9:
					$chu = "Chín";
					break;
				default:
					$chu = "Nhập từ 0 -> 9";
			}
		}
	}
	?>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<th colspan="3"> Đọc số </th>
				</tr>
				<tr>
					<td>Nhập số (0->9)</td>
					<td></td>
					<td>Bằng chữ: </td>
				</tr>
				<tr>
					<td> <input name="txtSo" type="text" value="<?php echo $so;?>" /> </td>
					<td> <input name="sbmSubmit" type="submit" value="=>" /> </td>
					<td> <input name="txtChu" type="text" value="<?php echo $chu;?>" readonly /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>