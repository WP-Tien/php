<!DOCTYPE html>
<html>
<head>
	<title>Trang tìm kiếm</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	if($_POST)
	{
		$mang_chuoi = $_POST["nhapmang"];
		$mang = explode(",",$mang_chuoi); // explode ra 1 mảng
		$gia_tri = $_POST["socantim"];
		
		$n = count($mang);

		$kq=-1;
		for($i = 0; $i<$n; $i++)
		{
			if($mang[$i]==$gia_tri)
				$kq = $i;
		}

		$mang_kq = implode(",",$mang);

		if($kq <> -1)
		{
			$kq = $kq + 1;
		}

		foreach($mang as $tach)
		{
			echo $tach. "</br>";
		}
	}

?>
	<form action="" method="post">
		<table>
			<tr>
				<th colspan="2"> TÌM KIẾM </th>
			</tr>
			<tr>
				<td> Nhập mảng: </td>
				<td> <input type="text" name="nhapmang" value="<?php echo (isset($mang_chuoi)) ? "$mang_chuoi" : ""; ?>" /> </td>
			</tr>
			<tr>
				<td> Nhập số cần tìm: </td>
				<td> <input type="text" name="socantim" value="<?php echo (isset($gia_tri)) ? "$gia_tri" : ""; ?>" /> </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tìm kiếm" /> </td>
			</tr>
			<tr>
				<td> Mảng: </td>
				<td> <input type="text" name="mang" value="<?php echo (isset($mang_kq)) ? "$mang_kq" : "";?>" /> </td>
			</tr>
			<tr>
				<td>Kết quả tìm kiếm: </td>
				<td> <input type="text" name="ketqua" value="<?php if(isset($kq)) {echo "Tìm thấy ". $gia_tri ." tại vị trí thứ ". $kq ." của mảng";}?>" /> </td>
			</tr>
		</table>
	</form>
</body>
</html>