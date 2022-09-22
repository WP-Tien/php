<meta charset="utf-8" />
<?php
	if(isset($_POST["mang"]))
	{
		$chuoi = $_POST["mang"];
		$mang = explode(",",$chuoi);
		
		$sl = array_count_values($mang);
		$xuatsl = implode(",",$sl);
		
		$dn = array_unique($mang);
		$xuatdn = implode(",",$dn);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Đếm số lần xuất hiện và tạo mảng duy nhất
			</td>
		</tr>
		<tr>
			<td>Mảng</td>
			<td><input type="text" name="mang" value="<?php echo $chuoi;?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Thực hiện" /></td>
		</tr>
		<tr>
			<td>Số lần xuất hiện: </td>
			<td><input type="text" name="ptm1" readonly value="<?php echo$xuatsl;?>" /></td>
		</tr>
		<tr>
			<td>Mảng duy nhất </td>
			<td><input type="text" name="ptm2" readonly value="<?php echo$xuatdn;?>" /></td>
		</tr>
		
	</table>
</form>