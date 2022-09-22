<html>
	<head>
		<title> Giải phương trình bật nhất / Code xuyên màng đêm </title>
		<meta charset="UTF-8">
	</head>
	<?php 
	$a = '';
	$b = '';
	$kq = '';
	if(isset($_POST["sbmResult"]))
	{		
		$a = $_POST["txSo1"];
		$b = $_POST["txtSo2"];
		$kq = "";
		if($a == 0)
		{
			if ($b == 0)
				$kq = "Phương trình vô số nghiệm";	
			else 
				$kq = "Phương trình vô nghiệm";
		}
		else
			$kq = -$b/$a;
	}

		
		
	?>
	<body>
		<form method="post" action="">
			<table style="border-collapse: collapse" border="1" width="400" align="center" >
				<tr> 
					<th colspan="2"> GIẢI PHƯƠNG TRÌNH BẬT NHẤT </th>
				</tr>
				<tr>
					<td> Phương trình </td>
					<td> <input type="text" name="txSo1" size="5" value="<?php echo $a ;?>" /> x + <input type="text" name="txtSo2" size="5" value="<?php echo $b;?>"/> = 0 </td>
				</tr>
				<tr>
					<td> Nghiệm </td>
					<td> <input type="text" readonly size="35" value=" <?php echo "x=".$kq;?>" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input type="submit" value="Giải phương trình" name="sbmResult" /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>
