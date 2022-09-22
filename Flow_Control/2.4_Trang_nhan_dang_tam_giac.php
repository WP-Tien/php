<meta charset="utf-8" />
<?php
$canh_1 = "";
$canh_2 = "";
$canh_3 = "";
$loai_tam_giac = "";
if($_POST)
{
	$canh_1 = $_POST["canh_1"];
	$canh_2 = $_POST["canh_2"];
	$canh_3 = $_POST["canh_3"];

	if($canh_1 > 0 && $canh_2 > 0 && $canh_3 > 0 && ($canh_1 + $canh_2) > $canh_3 && ($canh_1 + $canh_3) > $canh_2 && ($canh_2 + $canh_3) > $canh_1)
	{
		// tam giác đều
		if($canh_1 == $canh_2 && $canh_3 == $canh_2)
		{
			$loai_tam_giac = "tam giác đều";
		}
		// tam giác cân
		else if($canh_1 == $canh_2 || $canh_2 == $canh_3)
		{
			$loai_tam_giac = "tam giác cân";
		}
		// tam giác vuông 
		else if(pow($canh_1,2) == (pow($canh_2,2) + pow($canh_3,2)) || pow($canh_2,2) == (pow($canh_1,2) + pow($canh_3,2)) || pow($canh_3,2) == (pow($canh_2,2) + pow($canh_1,2)))
		{
			$loai_tam_giac = "tam giác vuông";
		}
		else
		{
			$loai_tam_giac = "tam giác thường";
		}
	}
	else
	{
		$loai_tam_giac = "Không phải là tam giác";
	}
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">
				Nhận dạng tam giác
			</td>
		</tr>
		<tr>
			<td>Cạnh 1</td>
			<td>
				<input type="text" name="canh_1" value='<?php echo $canh_1; ?>' />
			</td>
		</tr>
		<tr>
			<td>Cạnh 2</td>
			<td>
				<input type="text" name="canh_2" value='<?php echo $canh_2; ?>' />
			</td>
		</tr>
		<tr>
			<td>Cạnh 3</td>
			<td>
				<input type="text" name="canh_3" value='<?php echo $canh_3; ?>' />
			</td>
		</tr>
		<tr>
			<td>Loại tam giác</td>
			<td>
				<input type="text" value='<?php echo $loai_tam_giac; ?>' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="Xét tam giác" />
			</td>
		</tr>
	</table>
</form>