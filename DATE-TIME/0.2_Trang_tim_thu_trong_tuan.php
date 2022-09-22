<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Tiến Nguyễn code xuyên màng đêm </title>
	</head>
	<?php
		$day = 0;
		$month = 0;
		$year = 0;
		$kq = '';
		
		if($_POST)
		{
			$day = $_POST["txtDay"];
			$month = $_POST["txtMonth"];
			$year = $_POST["txtYear"];

			$sogiay = mktime(0,0,0,$month,$day,$year);

			$vt = date("w",$sogiay);
			switch($vt)
			{
				case 0;
					$kq = "Chủ nhật";
					break;
				case 1;
					$kq = "Thứ hai";
					break;
				case 2;
					$kq = "Thứ ba";
					break;
				case 3;
					$kq = "Thứ tư";
					break;
				case 4;
					$kq = "Thứ năm";
					break;
				case 5;
					$kq = "Thứ sáu";
					break;
				case 6;
					$kq = "Thứ bảy";
					break;		
			}
		}
	?>
	<body>
			<form name="main_frm" method="post" action="">
			<table align="center" border="0" width="600">
				<tr>
					<td> Tìm thứ trong tuần </td> 
				</tr>
				<tr>
					<td><input name="txtDay" type="text" value="" />/<input name="txtMonth" type="text" value="" />/<input name="txtYear" type="text" value=""/></td>
				</tr>
				<tr>
					<td><input name="txtKq" type="text" value="<?php echo$kq; ?>" readonly /> </td>
				</tr>
				<tr>
					<td><input type="submit" value="Tìm thứ trong tuần" /> </td>
				</tr>
			</table>
			</form>
	</body>

</html>