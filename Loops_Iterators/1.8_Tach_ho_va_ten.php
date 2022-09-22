<!DOCTYPE html>
<html>
<head>
	<title>Tách họ và tên</title>
	<meta charset="utf-8" />
</head>
<body>
<?php
	$ho_ten = "";
	$ho = "";
	$ten_dem = "";
	$ten = "";

	if($_POST)
	{
		$ho_ten = $_POST["hovaten"];
		$mang_ten = explode(" ",$ho_ten);
		// xem mang_ten
		foreach ($mang_ten as $tach)
		{
			echo $tach ."</br>";
		}

		$ho = $mang_ten[0];
		$ten = $mang_ten[count($mang_ten) - 1];
		for($i = 1; $i < count($mang_ten) - 1; $i++)
		{
			$ten_dem .= $mang_ten[$i] . "";
		}

	}
?>

	<form action="" method="post">
		<table>
			<tr>
				<th> TÁCH HỌ VÀ TÊN </th>
			</tr>
			<tr>
				<td> Họ và tên </td>
				<td> <input type="text" name="hovaten" value="<?php echo $ho_ten;?>" /> </td> 
			</tr>
			<tr>
				<td> Họ: </td>
				<td> <input type="text" name="ho" value="<?php echo $ho;?>" /> </td>
			</tr>
			<tr>
				<td> Tên đệm: </td>
				<td> <input type="text" name="tendem" value="<?php echo $ten_dem;?>" /> </td>
			</tr>
			<tr>
				<td> Tên: </td>
				<td> <input type="text" name="ten" value="<?php echo $ten; ?>" /> </td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" name="" value="Tách" /> </td>
			</tr>
		</table>
	</form>
</body>
</html>