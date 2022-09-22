<html>
	<head>
		<meta charset="utf-8" />
		<title> THÔNG TIN ĐẶT CHỖ</title>
	</head>
<?php
if($_POST)
{
	$so_khach = $_POST["so_khach"];
	$ngay = $_POST["ngay"];
	$loai_tiec = $_POST["loai_tiec"];
	$loai_tiec = implode(" - ",$loai_tiec);
	$dia_diem = $_POST["dia_diem"];
	$dia_diem = ($dia_diem)?"Ngoài trời":"Trong nhà";
	$ten_kh = $_POST["ten_kh"];
	$do_tuoi = $_POST["do_tuoi"];
	$dia_chi = $_POST["dia_chi"];
	$gioi_tinh = $_POST["gioi_tinh"];
	$gioi_tinh = ($gioi_tinh)?"Nữ":"Nam";
	$phuong_tien = $_POST["phuong_tien"];
	$phuong_tien = implode(", ",$phuong_tien);
	$noi_dung = $_POST["noi_dung"];
	
	$kq = 1;
	
	if($so_khach == "" || $so_khach <= 0)
	{
		echo "Vui lòng nhập số khách hợp lệ!";
		$kq = 0;
	}
	else if($ngay == "")
	{
		echo "Vui lòng chọn ngày!";
		$kq = 0;
	}
	else if($ten_kh  == "")
	{
		echo "Vui lòng nhập tên của bạn!";
		$kq = 0;
	}
	else if($noi_dung  == "")
	{
		echo "Vui lòng nhập nội dung của bạn!";
		$kq = 0;
	}
	
	if($kq == 1)
	{
		$chuoi = "<h3>Thông tin khách hàng:</h3> Họ tên: $ten_kh - Độ tuổi: $do_tuoi / Giới tính: $gioi_tinh<br/>Đia chỉ: $dia_chi";
		$chuoi .= "<h3>Thông tin đặt chỗ:</h3> Số khách tham gia buổi tiệc: $so_khach - Ngày đặt tiệc: $ngay<br/>Loại tiệc: $loai_tiec / Địa điểm: $dia_diem";
		$chuoi .= "<h3>Các yêu cầu kèm theo:</h3> $noi_dung";
		$chuoi .= "<center><i>Quý khách biết đến chúng tôi qua: $phuong_tien</i></center>";
		$chuoi .= "Chúng tôi đã nhận được thông tin đặt chỗ của quý khách vào lúc: ". date("d/m/Y H:i:s");
	}
}
?>
	<body>
			<form name="myForm" action="" onSubmit="return validateForm()" method="post">
				<table align="center"> 
						<tr>
								<td colspan="4" style="font-weight:bold " align="center"> THÔNG TIN ĐẶT CHỖ</td>
							</tr></br>
							<tr>
								<td> Số khách tham dự bữa tiệc của quý khách:</td>
									<td> <input type="text" name="so_khach" value="<?php echo (isset($so_khach)) ? "$so_khach" : "" ;?>"/> </td>
									<td> Ngày:</td>
									<td> <input type="date" name="ngay" value="<?php echo (isset($ngay)) ? "$ngay" : "" ;?>"/> </td>
							</tr>
							<tr>
								<td> Loại tiệc:</td>
									<td> <input type="checkbox" name="loai_tiec[]" value="tiec_sang" id="tiec_sang" /> 
											<label title="Tiệc sáng" for="tiec_sang">Tiệc sáng</label> 
										<input type="checkbox" name="loai_tiec[]" value="tiec_trua" id="tiec_trua" /> 
											<label title="Tiệc trưa" for="tiec_trua">Tiệc trưa</label> 
										<input type="checkbox" name="loai_tiec[]" value="tiec_toi" id="tiec_toi" /> 
											<label title="Tiệc tối" for="tiec_toi">Tiệc tối</label> </td>        
							</tr>
							<tr>
								<td> Địa điểm:</td>
									<td> <input type="radio" name="dia_diem" value="0" id='trong_nha' /> 
											<label for="trong_nha">Trong nhà</label>
						<input type="radio" name="dia_diem" value="1" id='ngoai_troi' /> 
												<label for="ngoai_troi">Ngoài trời</label> </td>        
							</tr>
							<tr>
								<td> Tên quý khách:</td>
									<td> <input type="text" name="ten_kh" value="<?php echo (isset($ten_kh)) ? "$ten_kh" : ""; ?>" /> </td>  
									<td> Địa chỉ liên lạc:</td>
									<td> <input type="text" name="dia_chi" value="<?php echo (isset($dia_chi)) ? "$diachi" : ""; ?>" /> </td>         
							</tr>
							<tr>
								<td>Độ tuổi:</td>
									<td><select name="do_tuoi" >
							<option>Từ 1 đến 19 tuổi</option>
							<option>Từ 19 đến 34 tuổi</option>
							<option>Từ 34 đến 70 tuổi</option>		
						</select>
									</td>
									<td> Giới tính:</td>
									<td> <input type="radio" name="gioi_tinh" value="0" id='nam' /> 
											<label for="nam">Nam</label>
						<input type="radio" name="gioi_tinh" value="1" id='nu' /> 
												<label for="nu">Nữ</label> </td> 
							</tr>
							<tr>
								<td>Quý khách biết đến Nhà hàng của chúng tôi qua:</td>
									<td colspan="3" align="center"><select name="phuong_tien[]" multiple >
							<option>Báo chi</option>
							<option>Đài phát thanh</option>
							<option>Ti vi</option>		
						</select>
									</td>                 
							</tr>
							<tr>
								<td colspan="4"> Các yêu cầu khác của Quý khách:</td>
							</tr>
							<tr>
								<td width="200px" height="47" colspan="4">                
										<div>
											<textarea name="noi_dung"></textarea>
										</div>    
									</td>                    
							</tr> 
							<tr>
					<td colspan="4">
						<input type="submit" value="Đặt chỗ" onclick="return kiem_tra()" />
					</td>
				</tr>           
					</table>    
			</form>
		<div>
			<?php echo (isset($chuoi)) ? "$chuoi" : ""; ?>
		</div>
		<script type="text/javascript">
			function kiem_tra()
			{
				//alert(document.myForm.so_khach.value);
				if(document.myForm.so_khach.value == "" || document.myForm.so_khach.value <= 0)
				{
					alert("Vui lòng nhập số khách hợp lệ!");
					return false;
				}
				else if(document.myForm.ngay.value == "")
				{
					alert("Vui lòng chọn ngày!");
					return false;
				}
				else if(document.myForm.ten_kh.value  == "")
				{
					alert("Vui lòng nhập tên của bạn!");
					return false;
				}
				else if(document.myForm.noi_dung.value  == "")
				{
					alert("Vui lòng nhập nội dung của bạn!");
					return false;
				}
				
				alert("Bạn đã đặt thành công!");
				return true;
			}
		</script>
	</body>
</html>



