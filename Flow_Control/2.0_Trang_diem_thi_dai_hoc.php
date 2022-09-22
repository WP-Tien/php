<meta charset="utf-8" />
<?php
	$diem_toan = "";
	$diem_ly = "";
	$diem_hoa = "";
	$diem_chuan = "";
	$ket_qua = "";
	$tong_diem = "";
	if($_POST)
	{
		$diem_toan = $_POST["diem_toan"];
		$diem_ly = $_POST["diem_ly"];
		$diem_hoa = $_POST["diem_hoa"];
		$diem_chuan = $_POST["diem_chuan"];
		
		if($diem_toan <= 10 && $diem_toan >= 0 && $diem_ly <= 10 && $diem_ly >= 0 && $diem_hoa <= 10 && $diem_hoa >= 0)
		{
			$tong_diem = $diem_toan + $diem_ly + $diem_hoa;
				
			if($tong_diem >= $diem_chuan)
			{
				$ket_qua = "Đậu";
			}
			else
			{
				$ket_qua = "Rớt";
			}
		}
		else
		{
			$ket_qua = "Sao cứ thích thử máy vậy?";
		}
	}
	?>
<form action="" method="post">
	<table style="font-family: uvn_bay_buom; font-size: 20px; font-weight: bold;">
		<tr>
			<td colspan="2">Kết quả thi ĐH</td>
		</tr>
		<tr>
			<td>Điểm Toán:</td>
			<td><input type="text" name="diem_toan" value="<?php echo $diem_toan; ?>" /></td>
		</tr>
		<tr>
			<td>Điểm Lý:</td>
			<td><input type="text" name="diem_ly" value="<?php echo $diem_ly; ?>" /></td>
		</tr>
		<tr>
			<td>Điểm Hóa:</td>
			<td><input type="text" name="diem_hoa" value="<?php echo $diem_hoa; ?>" /></td>
		</tr>
		<tr>
			<td>Điểm Chuẩn:</td>
			<td><input type="text" name="diem_chuan" value="<?php echo $diem_chuan; ?>" /></td>
		</tr>
		<tr>
			<td>Tổng Điểm:</td>
			<td><input type="text" readonly value="<?php echo $tong_diem; ?>" /></td>
		</tr>
		<tr>
			<td>Kết quả:</td>
			<td><input type="text" readonly value="<?php echo $ket_qua; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Tính" /></td>
		</tr>
	</table>
</form>