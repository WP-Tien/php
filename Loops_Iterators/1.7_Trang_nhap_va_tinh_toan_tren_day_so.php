<meta charset="utf-8" />
<?php
	$day_so = 0;
	$mang_so = 0;
	$tong = 0;
	if($_POST)
	{
		$day_so = $_POST["day_so"];
		$mang_so = explode(",",$day_so);
		
		foreach($mang_so as $gia_tri)
		{
			$tong += $gia_tri;
		}
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Nhập và tính trên dãy số
			</td>
		</tr>
		<tr>
			<td>Nhập dãy số</td>
			<td><input type="text" name="day_so" value="<?php echo $day_so; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Tính" />
			</td>
		</tr>
		<tr>
			<td>Tổng dãy số</td>
			<td><input type="text" value="<?php echo $tong; ?>" /></td>
		</tr>
	</table>
</form>