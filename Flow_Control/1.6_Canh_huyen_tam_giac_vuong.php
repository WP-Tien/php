<meta charset="utf-8" />
<?php

	$canh_a = '';
	$canh_b = '';
	$canh_huyen = '';
	
	if($_POST)
	{
		$canh_a = $_POST["canh_a"];
		$canh_b = $_POST["canh_b"];
		
		$canh_huyen = sqrt(($canh_a * $canh_a) + ($canh_b * $canh_b));
	}
	?>
<form action="" method="post">
	<table style="font-family: uvn_bay_buom; font-size: 20px; font-weight: bold;">
		<tr>
			<td colspan="2">Cạnh huyền tam giác vuông</td>
		</tr>
		<tr>
			<td>Cạnh a:</td>
			<td><input type="text" name="canh_a" value="<?php echo $canh_a; ?>" /></td>
		</tr>
		<tr>
			<td>Cạnh b:</td>
			<td><input type="text" name="canh_b" value="<?php echo $canh_b; ?>" /></td>
		</tr>
		<tr>
			<td>Cạnh huyền:</td>
			<td><input type="text" readonly value="<?php echo $canh_huyen; ?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Tính" /></td>
		</tr>
	</table>
</form>