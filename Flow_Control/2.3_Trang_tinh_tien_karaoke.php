<meta charset="utf-8" />
<?php
$gio_bd = "";
$gio_kt = "";
$thanh_tien = "";
if($_POST)
{
	$gio_bd = $_POST["gio_bd"];
	$gio_kt = $_POST["gio_kt"];

	if($gio_bd >= 10 && $gio_kt <= 24 && $gio_kt > $gio_bd)
	{
		if($gio_kt <= 17)
		{
			$thanh_tien = ($gio_kt - $gio_bd) * 20000;
		}
		else if($gio_bd >= 17)
		{
			$thanh_tien = ($gio_kt - $gio_bd) * 45000;
		}
		else
		{
			$thanh_tien = (17 - $gio_bd) * 20000 + ($gio_kt - 17) * 45000;
		}
	}
	else
	{
		$thanh_tien = "Xạo hả bưởi";
	}
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Tinh tiền Karaoke
			</td>
		</tr>
		<tr>
			<td>Giờ bắt đầu</td>
			<td>
				<input type="text" name="gio_bd" value='<?php echo $gio_bd; ?>' />
			</td>
		</tr>
		<tr>
			<td>Giờ kết thúc</td>
			<td>
				<input type="text" name="gio_kt" value='<?php echo $gio_kt; ?>' />
			</td>
		</tr>
		<tr>
			<td>Thành tiền</td>
			<td>
				<input type="text" value='<?php echo $thanh_tien; ?>' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Tính tiền" />
			</td>
		</tr>
	</table>
</form>