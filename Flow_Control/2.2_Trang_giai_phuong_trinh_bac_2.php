<meta charset="utf-8" />
<?php
$nghiem = 0;

function giai_pt_bac_1($so_b, $so_c)
{
	if($so_b == 0)
	{
		if($so_c == 0)
		{
			$nghiem = "Phương trình có vô số nghiệm";
		}
		else if($so_c != 0)
		{
			$nghiem = "Phương trình vô nghiệm";
		}
	}
	else
	{
		$nghiem = "Phương trình có nghiệm: " . ((-$so_c)/$so_b);
	}
	return $nghiem;
}

function giai_pt_bac_2($so_a, $so_b, $so_c)
{
	if($so_a == 0)
	{
		$nghiem = giai_pt_bac_1($so_b, $so_c);
	}
	else
	{
		$delta = pow($so_b,2) - 4 * $so_a * $so_c;
		
		if($delta < 0)
		{
			$nghiem = "Phương trình vô nghiệm";
		}
		else if($delta == 0)
		{
			$nghiem = "Có nghiệm kép: x<sub>1</sub> = x<sub>2</sub> = ". (-$so_b/($so_a * 2));
		}
		else
		{
			$nghiem = "Có 2 nghiệm phân biệt: x<sub>1</sub> = " . ((-$so_b + sqrt($delta))/(2 * $so_a)) . "; x<sub>2</sub> = ". ((-$so_b - sqrt($delta))/(2 * $so_a));
		}
	}
	return $nghiem;
}

	if($_POST)
	{
		$so_a = $_POST["so_a"];
		$so_b = $_POST["so_b"];
		$so_c = $_POST["so_c"];
		
		$nghiem = giai_pt_bac_2($so_a, $so_b, $so_c);
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Giải phương trình bậc 2</td>
		</tr>
		<tr>
			<td>Phương trình</td>
			<td><input type="text" name="so_a" />x<sup>2</sup> + <input type="text" name="so_b" />x + <input type="text" name="so_c" /> = 0</td>
		</tr>
		<tr>
			<td>Nghiệm</td>
			<td><?php echo $nghiem; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Hiển thị" />
			</td>
		</tr>
	</table>
</form>