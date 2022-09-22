<meta charset="utf-8" />
<?php
	if($_POST)
	{
		$chuoi = $_POST["chuoi"];
		$tu_goc = $_POST["tu_goc"];
		$tu_thay_the = $_POST["tu_thay_the"];
		
		$ket_qua = str_replace($tu_goc,$tu_thay_the,$chuoi);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Thay thế từ trong chuỗi</td>
		</tr>
		<tr>
			<td>Chuỗi</td>
			<td><input type="text" name="chuoi" /></td>
		</tr>
		<tr>
			<td>Từ gốc</td>
			<td><input type="text" name="tu_goc" /></td>
		</tr>
		<tr>
			<td>Từ thay thế</td>
			<td><input type="text" name="tu_thay_the" /></td>
		</tr>
		<tr>
			<td>Kết quả</td>
			<td><input type="text" value="<?php echo (isset($ket_qua)) ? "$ket_qua" : ""; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Hiển thị" />
			</td>
		</tr>
	</table>
</form>