<html>
	<head>
		<title> Tính số ngày trong tháng </title>
	</head>
	<?php 
	$err="";
	$kt=true;
	$thang = 0;
	$nam = 0;
	$kq="";
	$namNhuan="";
	//Kiểm tra
	if(isset($_POST["btnTinh"]))
	{
		$thang = $_POST["txtNhap1"];
		$nam = $_POST["txtNhap2"];

		if($thang == "")
		{
			$err="Nhập tháng";
			$kt=false;
		}
		elseif(!is_numeric($thang))
		{
			$err="Nhập tháng là số";
			$kt=false;
		}
		elseif($nam=="")
		{
			$err="Nhập năm";
			$kt=false;
		}
		elseif(!is_numeric($nam))
		{
			$err="Nhập năm phải là số";
			$kt=false;
		}
		elseif(!checkdate($thang,1,$nam))
		{
			$err="Nhập sai biểu thức tháng or năm";
			$kt=false;
		}
		if($kt)
		{
			//date("L") phải năm nhuần 
			// 0 ko phải năm nhuần 
			$sogiay=mktime(0,0,0,$thang,1,$nam);
			$songay=date("t",$sogiay);
			if(date("L",$sogiay)==1)
			{
				$namNhuan="-Là năm nhuần";
			}
			$kq="Tháng $thang năm $nam có $songay ngày $namNhuan";
		}
	}
	?>
	<body>
		<h2 style="color:red;text-align:center"><?php echo $err; ?></h2>
		<form name="form1" method="post" action="">
			<table>
				<tr> 
					<th colspan="2">
						<p>
						Tính số ngày trong tháng </p>
					</th>
				</tr>
				<tr>
					<td>
						<p> Nhập tháng </p>
					</td>
					<td>
						<input type="text" name="txtNhap1" value="<?php echo $thang; ?>" /> / <input type="text" name="txtNhap2" value="<?php echo $nam; ?>" /> 
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="btnTinh" value="Tính số ngày" />
					</td>
				</tr>
				<tr>
					<td>
						<p> Kết quả </p>
					</td>
					<td>
						<input name="txtResult" type="text" readonly="readonly" value="<?php  echo $kq;?>"> 
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>