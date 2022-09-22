<meta charset="utf-8" />

<?php
if($_POST)
{
	$nhap_mang_1 = $_POST["nhap_mang_1"];
	$nhap_mang_2 = $_POST["nhap_mang_2"];
	
	$mang_so_1 = explode(",",$nhap_mang_1);
	$mang_so_2 = explode(",",$nhap_mang_2);
	
	$phan_tu_khac_mang_1 = array_diff($mang_so_1, $mang_so_2);
	$phan_tu_khac_mang_1 = implode(", ",$phan_tu_khac_mang_1);
	$phan_tu_khac_mang_2 = array_diff($mang_so_2, $mang_so_1);
	$phan_tu_khac_mang_2 = implode(", ",$phan_tu_khac_mang_2);
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
			<td>Nhập mảng 2</td>
			<td><input type="text" name="nhap_mang_2" value="<?php echo (isset($nhap_mang_2)) ? "$nhap_mang_2" : ""; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Sắp xếp" />
			</td>
		</tr>
		
		<tr>
			<td>P/T only in mang1:</td>
			<td><input type="text" value="<?php echo (isset($phan_tu_khac_mang_1)) ? "$phan_tu_khac_mang_1" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>P/T only in mang2:</td>
			<td><input type="text" value="<?php echo (isset($phan_tu_khac_mang_2)) ? "$phan_tu_khac_mang_2" : ""; ?>" /></td>
		</tr>
	</table>
</form>