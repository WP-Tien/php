<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<?php
	$mang_tour = array(
		array('1',"Hà Nội - Hạ Long - Sapa",6000000),
		array('2',"Hà Nội - Hải Phòng",5500000),
		array('3',"Hà Nội - Điện Biên",5500000),
		array('4',"Huế - Bạch Mã - Đà Nẵng",5000000),
		array('5',"Nha Trang - Đà Lạt",3000000),
		array('6',"Buôn Mê Thuộc - Gia Lai - KonTum",3500000),
		array('7',"TP.HCM - Phú Quốc",4000000),
		array('8',"TP.HCM - Cần Thơ - Cà mau",4500000),
		array('9',"TP.HCM - Mỹ Tho",4500000)
	);
	$mang_phuong_tien = array("Máy bay","Tàu hỏa","Xe Hơi","Tàu Thủy","Xe Máy");
?>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="3">
					Đăng ký tour du lịch
				</td>
			</tr>
			<tr>
				<td>Tên tour:</td>
				<td>
					<select name="tour">
						<?php
						foreach($mang_tour as $key=>$tour)
						{
						?>
						<option value="<?php echo $key; ?>"><?php echo $tour[1]; ?></option>
						<?php
						}
						?>
					</select>
				</td>

				<td rowspan="7">
					<img src="asdasdas" />
				</td>
			</tr>
			<tr>
				<td>Ngày khởi hành:</td>
				<td>
					<input type="text" class="ngay_khoi_hanh" name="ngay_khoi_hanh" value="<?php echo date("d/m/Y"); ?>" />
					<!-- Lấy time hiện tại -->
					<script>
						$(function() {
						    $(".ngay_khoi_hanh").datepicker({dateFormat: "dd/mm/yy"});
						});
					</script>
				</td>
			</tr>
			<tr>
				<td>Phương tiện:</td>
				<td>
					<select name="phuong_tien">
						<?php
						foreach($mang_phuong_tien as $phuong_tien)
						{
						?>
						<option><?php echo $phuong_tien; ?></option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Số lượng đăng ký:</td>
				<td>
					<input type="text" name="so_luong_dang_ky" />
				</td>
			</tr>
			<tr>
				<td>Tên khách hàng:</td>
				<td>
					<input type="text" name="ten_khach_hang" />
				</td>
			</tr>
			<tr>
				<td>Liên hệ theo địa chỉ:</td>
				<td>
					<input type="text" name="dia_chi_lien_he" />
				</td>
			</tr>
			<tr>
				<td>Số điện thoại:</td>
				<td>
					<input type="text" name="so_dien_thoai" />
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div>
						Những yêu cầu kèm theo
					</div>
					<div>
						<textarea></textarea>
					</div>
				</td>
			</tr>

			<tr>
				<td colspan="3">
					<input type="submit" value="Đăng ký tour" />
				</td>
			</tr>
		</table>
	</form>
	<div>
		<?php
		if($_POST)
		{
			$so_luong_dang_ky = $_POST["so_luong_dang_ky"];

			if($_POST["phuong_tien"] == "Máy bay")
			{
				$gia_tien = $mang_tour[$_POST["tour"]][2];
			}
			else if($_POST["phuong_tien"] == "Tàu hỏa")
			{
				$gia_tien = $mang_tour[$_POST["tour"]][2] * 0.95;
			}
			else if($_POST["phuong_tien"] == "Xe Hơi")
			{
				$gia_tien = $mang_tour[$_POST["tour"]][2] * 0.9;
			}
			else if($_POST["phuong_tien"] == "Tàu Thủy")
			{
				$gia_tien = $mang_tour[$_POST["tour"]][2] * 0.9;
			}
			else if($_POST["phuong_tien"] == "Xe Máy")
			{
				$gia_tien = $mang_tour[$_POST["tour"]][2] * 0.8;
			}

			if($so_luong_dang_ky > 50)
			{
				$gia_tien = $gia_tien * $so_luong_dang_ky * 0.8;
			}
			else if($so_luong_dang_ky >= 20)
			{
				$gia_tien = $gia_tien * $so_luong_dang_ky * 0.9;
			}
			else if($so_luong_dang_ky >= 10)
			{
				$gia_tien = $gia_tien * $so_luong_dang_ky * 0.95;
			}
			else if($so_luong_dang_ky >= 1)
			{
				$gia_tien = $gia_tien * $so_luong_dang_ky;
			}
			else
			{
				$gia_tien = "What do you want from me???";
			}

		}
		?>
		Thành tiền: <?php echo (isset($gia_tien)) ? "$gia_tien" : ""; ?>
	</div>
</body>
</html>