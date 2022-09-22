<!DOCTYPE html>
<html>
<head>
	<title> TÁCH HỌ VÀ TÊN </title>
	<meta charset="utf-8">
</head>
<?php 
	$tendem = '';
	if(isset($_POST["chuoi"]))
	{
		$chuoi = trim($_POST["chuoi"]);
		$chuoi_t = explode(" ",$chuoi);

		$n = count($chuoi_t);

		$ho = $chuoi_t[0];
		$ten = $chuoi_t[$n-1];
		
		for($i = 1; $i < $n-1; $i ++)
			$tendem = $tendem . $chuoi_t[$i] . " ";
	}
?>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<th colspan="2"> TÁCH HỌ VÀ TÊN</th>
			</tr>
			<tr> 
				<td> Họ và tên </td>
				<td> <input type="text" name="chuoi" value="" />  </td>
			</tr>
			<tr> 
				<td> Họ  </td>
				<td> <input type="text" name="ho" value="<?php echo (isset($ho)) ? "$ho" : "";?>" />  </td>
			</tr>
			<tr> 
				<td> Tên đệm </td>
				<td> <input type="text" name="tendem" value="<?php echo (isset($tendem)) ? "$tendem" : "";?>" />  </td>
			</tr>
			<tr> 
				<td> Tên </td>
				<td> <input type="text" name="ten" value="<?php echo (isset($ten)) ? "$ten" : "";?>" />  </td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" value="Tách Họ Tên" /> </td>
			</tr>

		<table>
	</form>
</body>
</html>