<meta charset="utf-8" />
<?php
	if($_POST)
	{
		$day_so = $_POST["day_so"];
		$gia_tri_can_thay_the = $_POST["gia_tri_can_thay_the"];
		$gia_tri_thay_the = $_POST["gia_tri_thay_the"];
		$mang_so = explode(",",$day_so);
		
		foreach($mang_so as $gia_tri)
		{
			if($gia_tri_can_thay_the == $gia_tri)
			{
				$mang_moi[] = $gia_tri_thay_the;
			}
			else
			{
				$mang_moi[] = $gia_tri;
			}
		}
		
		$mang_cu = implode(" ",$mang_so);
		$mang_moi = implode(" ", $mang_moi);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Thay thế
			</td>
		</tr>
		<tr>
			<td>Nhập dãy số</td>
			<td><input type="text" name="day_so" value="<?php echo (isset($day_so)) ? "$day_so" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Giá trị cần thay thế</td>
			<td><input type="text" name="gia_tri_can_thay_the" value="<?php echo (isset($gia_tri_can_thay_the)) ? "$gia_tri_can_thay_the" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Giá trị thay thế</td>
			<td><input type="text" name="gia_tri_thay_the" value="<?php echo (isset($gia_tri_thay_the)) ? "$gia_tri_thay_the" : ""; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Tính" />
			</td>
		</tr>
		<tr>
			<td>Mảng cũ:</td>
			<td><input type="text" value="<?php echo (isset($mang_cu)) ? "$mang_cu" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>Mảng mới:</td>
			<td><input type="text" value="<?php echo (isset($mang_moi)) ? "$mang_moi" : ""; ?>" /></td>
		</tr>
	</table>
</form>