<meta charset="utf-8" />
<?php
$so_bd = 0;
$so_kt = 0;
$tong_cac_so = 0;
$tich_cac_so = 0;
$tong_cac_so_chan = 0;
$tong_cac_so_le = 0;

if($_POST)
{
	$so_bd = $_POST["so_bd"];
	$so_kt = $_POST["so_kt"];
	
	$tich_cac_so = 1;
	for($i = $so_bd; $i <= $so_kt; $i++)
	{
		$tong_cac_so += $i;
		$tich_cac_so *= $i;
		if($i % 2 == 0)
		{
			$tong_cac_so_chan += $i;
		}
		else
		{
			$tong_cac_so_le += $i;
		}
	}
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Tính toán trên dãy số
			</td>
		</tr>
		<tr>
			<td>Giới hạn của dãy số</td>
			<td>
				 <input type="text" name="so_bd" value='<?php echo $so_bd; ?>' /> đến <input type="text" name="so_kt" value='<?php echo $so_kt; ?>'/>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Kết quả
			</td>
		</tr>
		<tr>
			<td>Tổng các số</td>
			<td>
				 <input type="text" value='<?php echo $tong_cac_so; ?>' />
			</td>
		</tr>
		<tr>
			<td>Tích các số</td>
			<td>
				 <input type="text" value='<?php echo $tich_cac_so; ?>' />
			</td>
		</tr>
		<tr>
			<td>Tổng các số chẵn</td>
			<td>
				 <input type="text" value='<?php echo $tong_cac_so_chan; ?>' />
			</td>
		</tr>
		<tr>
			<td>Tổng các số lẻ</td>
			<td>
				 <input type="text" value='<?php echo $tong_cac_so_le; ?>' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Tính toán" />
			</td>
		</tr>
	</table>
</form>