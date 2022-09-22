<!DOCTYPE html>
<html>
<head>
	<title>Trang phát sinh mảng và tính toán</title>
	<meta charset="utf-8"/>
</head>
<?php

	if($_POST)
	{
		$so_phan_tu = $_POST["sophantu"];

		for($i = 1; $i <= $so_phan_tu; $i ++ )
		{
			$mang_so[] = rand(0,20);
		}

		$min = $mang_so[0];
		$max = $mang_so[0];
		foreach($mang_so  as $so)
		{
			if($min > $so)
			{
				$min = $so; 
			}
			if($max < $so)
			{
				$max = $so;
			}
			$tong+=$so;

		}
		$day_so = implode(" ", $mang_so);
	}

?>
<body>
	<form action="" method="post">
		<table>
			<tr>	
				<th> PHÁT SINH TRONG MẢNG VÀ TÍNH TOÁN </th>
			</tr>
			<tr>
				<td> Nhập số phần tử </td>
				<td> <input type="text" name="sophantu" value=""/> </td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" value="Phát sinh và tính toán" /> </td>
			</tr>
			<tr>
				<td>Mảng: </td>
				<td><input type="text" name="mang" value="<?php echo $day_so;?>" /> </td> 
			</tr>
			<tr>
				<td> GTLN (MAX) trong mảng: </td>
				<td><input type="text" name="max" value="<?php echo $max;?>" /> </td>
			</tr>
			<tr>
				<td> GTNN (MIN) trong mảng: </td>
				<td><input type="text" name="min" value="<?php echo $min; ?>" /> </td>
			</tr> 
			<tr>
				<td> Tổng mảng: </td>
				<td><input type="text" name="tong" value="<?php echo $tong; ?>" /> </td>
			</tr>
		</table>
	</form>
</body>
</html>