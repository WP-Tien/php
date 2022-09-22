<meta charset="utf-8" />
<?php
$thang = 0;
$nam = 0;
$ket_qua = "";
if($_POST)
{
	$thang = $_POST["thang"];
	$nam = $_POST["nam"];
	
	if(($nam % 4 == 0 && $nam % 100 != 0) || $nam % 400 == 0)
	{
		$nam_nhuan = 1;
	}
	else
	{
		$nam_nhuan = 0;
	}
	
	switch($thang)
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$ket_qua = "Tháng $thang năm $nam có 31 ngày";
			break;
		case 2:
			$ket_qua = ($nam_nhuan)?"Tháng $thang năm $nam có 29 ngày":"Tháng $thang năm $nam có 28 ngày";
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			$ket_qua = "Tháng $thang năm $nam có 30 ngày";
			break;
	}
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Tính số ngày trong tháng
			</td>
		</tr>
		<tr>
			<td>Nhập tháng/năm</td>
			<td>
				 <input type="text" name="thang" value='<?php echo $thang; ?>' />/<input type="text" name="nam" value='<?php echo $nam; ?>' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Tính số ngày" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				 <input type="text" readonly value='<?php echo $ket_qua; ?>' />
			</td>
		</tr>
	</table>
</form>