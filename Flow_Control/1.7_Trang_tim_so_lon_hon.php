<!DOCTYPE html>
<html>
	<head>
		<title> Code xuyên màng đêm </title>
		<meta charset="UTF-8" >
	</head>
	<?php 

	$soa = '';
	$sob =''; 
	$kq = '';

	if($_POST)
	{
	$soa = $_POST["txtSoA"];
	$sob = $_POST["txtSoB"];
	
		if($soa > $sob)
			$kq = "$soa";
		else
			$kq = "$sob";
	}
	?>
	<body>
		<form action="" method="post">
			<table border="0" width="300" align="center">
				<tr>
					<th colspan="2"> TÌM SỐ LỚN HƠN </th>
				</tr>
				<tr>
					<td> Số A: </td>
					<td> <input type="text" name="txtSoA" value="<?php echo $soa; ?>" /> </td>
				</tr>
				<tr>
					<td> Số B: </td>
					<td> <input type="text" name="txtSoB" value="<?php echo $sob; ?>" /> </td>
				</tr>
				<tr>
					<td> Số lớn hơn </td>
					<td> <input type="text" readonly value="<?php echo $kq; ?>" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" value="Tìm" /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>