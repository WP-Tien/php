<meta charset="utf-8" />
<?php
// USCLN cua 2 so nguyen duong a va b la mot so k lon nhat, sao cho a va b deu chia het cho k.
function ucln($so_a, $so_b)
{
	$so_be = ($so_a > $so_b)?$so_b:$so_a;
	for($i = $so_be; $i >= 1; $i--)
	{
		if($so_a % $i == 0 && $so_b % $i == 0)
		{
			$ucln = $i;
			break;
		}
	}
	return $ucln;
}

// BSCNN cua 2 so nguyen duong a va b la mot so h nho nhat, sao cho h chia het cho ca a va b.
function bcnn($so_a, $so_b)
{
	$so_lon = ($so_a > $so_b)?$so_a:$so_b;
	for($i = $so_lon; $i <= $so_a * $so_b; $i++)
	{
		if( $i % $so_a == 0 && $i % $so_b == 0)
		{
			$bcnn = $i;
			break;
		}
	}
	return $bcnn;
}

	if($_POST)
	{
		$so_a = $_POST["so_a"];
		$so_b = $_POST["so_b"];
		
		$ucln = ucln($so_a, $so_b);
		$bcnn = bcnn($so_a, $so_b);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Ước số chung lớn nhất và bội số chung nhỏ nhất</td>
		</tr>
		<tr>
			<td>Nhập A</td>
			<td><input type="text" name="so_a" /></td>
		</tr>
		<tr>
			<td>Nhập B</td>
			<td><input type="text" name="so_b" /></td>
		</tr>
		<tr>
			<td>USCLN</td>
			<td><input type="text" value="<?php echo (isset($ucln)) ? "$ucln" : ""; ?>" /></td>
		</tr>
		<tr>
			<td>BSCNN</td>
			<td><input type="text" value="<?php echo (isset($bcnn)) ? "$bcnn" : ""; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Hiển thị" />
			</td>
		</tr>
	</table>
</form>