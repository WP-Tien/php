<meta charset="utf-8" />
<?php
if($_POST)
{
	$nhap_mang_1 = $_POST["nhap_mang_1"];
	$nhap_mang_2 = $_POST["nhap_mang_2"];
	
	$mang_so_1 = explode(",",$nhap_mang_1);
	$mang_so_2 = explode(",",$nhap_mang_2);

	$so_pt_mang_1 = count($mang_so_1);
	$so_pt_mang_2 = count($mang_so_2);
	
	$mang_c = array_merge($mang_so_1, $mang_so_2);
	$mang_c_chuoi = implode(", ",$mang_c);
	
	sort($mang_c);
	$mang_tang = implode(", ",$mang_c);
	rsort($mang_c);
	$mang_giam = implode(", ",$mang_c);
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Sắp xếp mảng</td>
		</tr>
		<tr>
			<td>Nhập mảng 1</td>
			<td><input type="text" name="nhap_mang_1" /></td>
		</tr>
		<tr>
			<td>Nhập mảng 2</td>
			<td><input type="text" name="nhap_mang_2" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Sắp xếp" />
			</td>
		</tr>
		<tr>
			<td>Số phần tử mảng 1:</td>
			<td><input type="text" value="<?php echo (isset($so_pt_mang_1)) ? "$so_pt_mang_1" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Số phần tử mảng 2:</td>
			<td><input type="text" value="<?php echo (isset($so_pt_mang_2)) ? "$so_pt_mang_2" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng C:</td>
			<td><input type="text" value="<?php echo (isset($mang_c_chuoi)) ? "$mang_c_chuoi" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng C tăng dần</td>
			<td><input type="text" value="<?php echo (isset($mang_tang)) ? "$mang_tang" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng C giảm dần</td>
			<td><input type="text" value="<?php echo (isset($mang_giam)) ? "$mang_giam" : ""; ?>" /></td>
		</tr>
	</table>
</form>