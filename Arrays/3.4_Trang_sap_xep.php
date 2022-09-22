<meta charset="utf-8" />
<?php
if($_POST)
{
	$nhap_mang = $_POST["nhap_mang"];
	
	$mang_so = explode(",",$nhap_mang);
	sort($mang_so);
	$mang_tang = implode(", ",$mang_so);
	rsort($mang_so);
	$mang_giam = implode(", ",$mang_so);
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Sắp xếp mảng</td>
		</tr>
		<tr>
			<td>Nhập mảng</td>
			<td><input type="text" name="nhap_mang" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Sắp xếp" />
			</td>
		</tr>
		<tr>
			<td>Mảng tăng dần</td>
			<td><input type="text" value="<?php echo (isset($mang_tang)) ? "$mang_tang" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng giảm dần</td>
			<td><input type="text" value="<?php echo (isset($mang_giam)) ? "$mang_giam" : ""; ?>" /></td>
		</tr>
	</table>
</form>