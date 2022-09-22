<html>
	<head>
		<title> So chia het cho A  va B </title>
		<meta charset="UTF-8">
	</head>
	<?php 
		function kt_so($so,$a,$b)
		{
			if($so%$a==0 && $so%$b==0)
				return 1;
			else
				return 0;
		}
		
		$chuoi = '';
		
		if(isset($_POST["txtA"]) && isset($_POST["txtB"]) && isset($_POST["txtN"]))
		{
			$n = $_POST["txtN"];
			$a = $_POST["txtA"];
			$b = $_POST["txtB"];
			
				for($i=1;$i<=$n;$i++)
				{
					if(kt_so($i,$a,$b) == 1)
						$chuoi = $chuoi .$i. " ";
				}
				$chuoi = $chuoi . "Là các số chia hết cho A và B";
		}
		
		
	
	?>
	<body>
		<form action="" method="post">
			<table>
				<tr> 
					<th colspan="2"> SO CHIA HET CHO A VA B </th>
				</tr>
				<tr>
					<td> Nhập N: </td>
					<td> <input name="txtN" type="text" value="" /> </td>
				</tr>
				<tr>
					<td> Nhập A: </td>
					<td> <input name="txtA" type="text" value="" /> </td>
				</tr>
				<tr>
					<td> Nhập B: </td>
					<td> <input name="txtB" type="text" value="" /> </td>
				</tr>
				<tr>
					<td colspan="2"> <input name="sbmSubmit" type="submit" value="Các số <= N chia hết cho A và B" /> </td>		
				</tr>
				<tr>
					<td colspan="2"> <input name="txtResult" type="text" value="<?php echo (isset($chuoi)) ? "$chuoi" : "";?>" readonly /> </td>
				</tr>
			</table>
		</form>
	</body>
</html>
