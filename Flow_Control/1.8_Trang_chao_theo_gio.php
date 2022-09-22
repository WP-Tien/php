<!DOCTYPE html>
<html>
	<head>
		<title>Chào theo giờ</title>
		<meta charset="UTF-8" >
	</head>
	<?php 
		if(isset($_POST["submit"])){
			$gio = $_POST["txtGio"];

			if($gio > 0 && $gio < 13)
			{
				$kq="Chào buổi sáng";
			}
			else if($gio > 0 && $gio <= 18)
			{
				$kq="Chào buổi chiều";
			}
			else if($gio > 0 && $gio <= 23)
			{
				$kq="Chào buổi tối";
			}
			else
			{
				$kq="Làm ơn nhập giờ";
			}
		}
	?>
	<body>
		<form action="" method="post">
			<table >
				<tr>
					<th colspan="2"> Chào theo giờ </th>
				</tr>
				<tr>
					<td> Nhập giờ </td>
					<td> <input type="text" name="txtGio" value="" /> </td>
				</tr>
				<tr>
					<td style="text-align:center" colspan="2"><h2><?php echo $kq; ?> </h2></td>
				<tr>
				<tr>
					<td colspan="2"> <input type="submit" value="Chào" name="submit" /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>