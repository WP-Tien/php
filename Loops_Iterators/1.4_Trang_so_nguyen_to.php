<html>
	<head>
		<title> TÌM SỐ NGUYÊN TỐ </title>
		<meta charset="UTF-8">
	</head>
	<?php 
		$chuoi = '';
		function kt_snt($so)
		{
			$kq = 1;
			for($i=2; $i<=sqrt($so);$i++)
			{
				if($so%$i==0 && $so > 2)
				{
					$kq = 0;
					break;
				}
			}
			return $kq;
		}
		//in day so NT <= n 
		
		if(isset($_POST['txtN']))
		{
			$n = $_POST['txtN'];
			if($n < 2)
				$chuoi = "Không có số Nguyên Tố";
			else
			{
				$chuoi = "2 ";
				for($i=3; $i<=$n; $i++)
				{
					if(kt_snt($i) == 1)
						$chuoi = $chuoi.$i. " ";
				}
				$chuoi = $chuoi."Là các SNT";
			}
		}
		
	?>
	<body>
		<form charset="" method="post">
			<table>
				<tr>
					<th> TÌM SỐ NGUYÊN TỐ </th>
				</tr>
				<tr>
					<td> Nhập N: <input name="txtN" type="text" /></td>
				</tr>
				<tr>
					<td> <input name="sbmSubmit" type="submit"  value="Các số nguyên tố <=N" /> </td>
				</tr>
				<tr>
					<td> <input type="text" name="txtResult" readonly value="<?php echo $chuoi;?>" /> </td>
				</tr>
					
			</table>
		</form>
	</body>
</html>