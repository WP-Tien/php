<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title> <p>Thay thế từ trong chuỗi </title>
	</head>
	<?php
	$err="";
	$kt=true;
	$kq="";

	if($_POST){
		$txtChuoi1 = $_POST["txtChuoi1"];
		$txtChuoi2 = $_POST["txtChuoi2"];	
	}

	if(isset($_POST["btnXet"]))
	{
		if($txtChuoi1=="")
		{
			$err="Nhập chuỗi 1, please";
			$kt=false;
		}
		elseif($txtChuoi2=="")
		{
			$err="Nhập chuỗi 2, please";
			$kt=false;
		}
		if($kt)
		{
			// ord()chữ - chr()số
			echo ord("H");
			echo "<hr>";
			echo ord("h");
			echo "<hr>";
			//Không phải phân biệt HOA - thường
			//$cmp=strnatcasecmp($txtChuoi1,$txtChuoi2);
			//Phân biệt HOA - thường 
			$cmp=strcmp($txtChuoi1,$txtChuoi2);
			// 0: Hai chuỗi bằng nhau, 1: $str1 > $str2, -1 : $str1 < $str2 ;
			echo $cmp;
				if($cmp==0)
				{
					$kq ="Hai chuỗi bằng nhau";
				}
				elseif($cmp==1)
				{
					$kq = "Chuỗi 1 lớn hơn chuỗi hai";
				}
				else
				{
					$kq = "Chuỗi 1 nhỏ hơn chuỗi hai";
				}
					
		}
	}
		
			
		
	?>
	<body>
	<h3 style="color:#F00; text-align:center"><?php echo $err; ?></h3>
	<form name="ttttc" method="post" action="">
	<table>
		<tr> 
			<th colspan="2">
				<p> So sánh chuỗi </p>
			</th>
		</tr>
		<tr>
			<td>
				<p> Nhập chuỗi thứ nhất </p>
			</td>
			<td>
				<input name="txtChuoi1" type="text" size="40" value ="<?php echo (isset($txtChuoi1)) ? "$txtChuoi1" : "";?>"/>
			</td>
		</tr>
		<tr>
			<td>
				<p> Nhập chuỗi thứ hai </p>
			</td>
			<td>
				<input name="txtChuoi2" type="text" size="40" value="<?php echo (isset($txtChuoi2)) ? "$txtChuoi2" : ""; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input name="btnXet" type="submit" value="Xét" style="border-radius:5px; font-size:25px" />
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input name="txtResult" type="text" readonly="readonly" placeholder="Kết quả so sánh 2 chuỗi" size="40" value="<?php echo $kq; ?>" />
			</td>
		</tr>		
	</table>
	</form>
	</body>
</html>