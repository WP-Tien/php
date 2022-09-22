<meta charset="utf-8" />
<?php

// error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));

if($_POST)
{
	$nhap_mang_1 = $_POST["nhap_mang_1"];
	
	$mang_so_1 = explode(",",$nhap_mang_1);

	echo "<pre>";
	print_r($mang_so_1);
	echo "</pre>";
	
	$mang_dem = array_count_values($mang_so_1);
	$chuoi_mang_dem = '';
	foreach($mang_dem as $key=>$value)
	{
		$chuoi_mang_dem .= "$key:$value ";
	}
	
	$mang_duy_nhat = array_unique($mang_so_1);
	$mang_duy_nhat = implode(", ",$mang_duy_nhat);
}
?>

<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Sắp xếp mảng</td>
		</tr>
		<tr>
			<td>Nhập mảng 1</td>
			<td><input type="text" name="nhap_mang_1" value="<?php echo (isset($nhap_mang_1)) ? "$nhap_mang_1" : ""; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Sắp xếp" />
			</td>
		</tr>
		<tr>
			<td>Số lần xuất hiện:</td>
			<td><input type="text" value="<?php echo (isset($chuoi_mang_dem)) ? "$chuoi_mang_dem" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng duy nhất:</td>
			<td><input type="text" value="<?php echo (isset($mang_duy_nhat)) ? "$mang_duy_nhat" : ""; ?>" /></td>
		</tr>
	</table>
</form>