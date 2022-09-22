<?php

	if($_GET["id_xoa"] && $_GET["ds_khach_hang"])
	{
		$chuoi_kh = $_GET["ds_khach_hang"];
		$mang_kh = explode("||",$chuoi_kh);
		/*for($i = 0; $i < count($mang_kh); $i++)
		{
			$mang_kh[$i] = explode("|",$mang_kh[$i]);
			if($mang_kh[$i][0] == $_GET["id_xoa"])
			{
				unset($mang_kh[$i]);
			}
		}*/
		foreach($mang_kh as $key=>$khach_hang)
		{
			$mang_kh[$key] = explode("|",$mang_kh[$key]);
			if($mang_kh[$key][0] == $_GET["id_xoa"])
			{
				unset($mang_kh[$key]);
			}
		}
		
		//echo "<pre>",print_r($mang_kh),"</pre>";
		
		//ghep mang thanh chuoi_kh
		/*for($i = 0; $i < count($mang_kh); $i++)
		{
			$mang_kh_chuoi[$i] = implode("|",$mang_kh[$i]);
		}*/
		
		foreach($mang_kh as $key=>$khach_hang)
		{
			$mang_kh_chuoi[$key] = implode("|",$mang_kh[$key]);
		}
		
		$chuoi_mang_in_ra = implode("||",$mang_kh_chuoi);
	}
	else if($_POST)
	{
		$chuoi_kh = $_POST["ds_khach_hang"];
		$mang_kh = explode("||",$chuoi_kh);
		for($i = 0; $i < count($mang_kh); $i++)
		{
			$mang_kh[$i] = explode("|",$mang_kh[$i]);
		}
		$mang_kh[] = array($_POST["ma_khach_hang"],$_POST["ten_khach_hang"],$_POST["gioi_tinh"],$_POST["dia_chi"],$_POST["dien_thoai"]);
		
		//ghep mang thanh chuoi_kh
		for($i = 0; $i < count($mang_kh); $i++)
		{
			$mang_kh_chuoi[$i] = implode("|",$mang_kh[$i]);
		}
		$chuoi_mang_in_ra = implode("||",$mang_kh_chuoi);
	}
	else
	{
		$mang_kh = array(array("kh001","Khuất Thùy Phương","1","A1 Nguyễn Oanh","090909090"),array("kh002","Đỗ Lâm Thiên","0","ABC Lê hồng Phong","0120909090"));
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<script>
			function xoa()
			{
				kq = confirm("Bạn có chắc chắn muốn xóa?");
				return kq;
			}
		</script>
	</head>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td>Mã khách hàng</td>
					<td>Tên khách hàng</td>
					<td>Giới tính</td>
					<td>Địa chỉ</td>
					<td>Số điện thoại</td>
					<td>Thao tác</td>
				</tr>
				<?php
				foreach($mang_kh as $khach_hang)
				{
				?>
				<tr>
					<td><?php echo $khach_hang[0]; ?></td>
					<td><?php echo $khach_hang[1]; ?></td>
					<td><?php echo $khach_hang[2]; ?></td>
					<td><?php echo $khach_hang[3]; ?></td>
					<td><?php echo $khach_hang[4]; ?></td>
					<td><a onclick="return xoa()" href="bai3_2.php?id_xoa=<?php echo $khach_hang[0]; ?>&ds_khach_hang=<?php echo ($chuoi_mang_in_ra)?$chuoi_mang_in_ra:"kh001|Khuất Thùy Phương|1|A1 Nguyễn Oanh|090909090||kh002|Đỗ Lâm Thiên|0|ABC Lê hồng Phong|0120909090"; ?>">Xóa</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</form>
		
		<form action="" method="post">
			<div>Thêm khách hàng</div>
			<div>Mã khách hàng: <input type="text" name="ma_khach_hang" /></div>
			<div>Tên khách hàng: <input type="text" name="ten_khach_hang" /></div>
			<div>Giới tính: <label><input type="radio" name="gioi_tinh" value="0" />Nam</label> <label><input type="radio" name="gioi_tinh" value="1" />Nữ</label></div>
			<div>Địa chỉ: <input type="text" name="dia_chi" /></div>
			<div>Điện thoại: <input type="text" name="dien_thoai" /></div>
			<div><input type="submit" value="Thêm mới" /></div>
			<input type="hidden" name='ds_khach_hang' value="<?php echo ($chuoi_mang_in_ra)?$chuoi_mang_in_ra:"kh001|Khuất Thùy Phương|1|A1 Nguyễn Oanh|090909090||kh002|Đỗ Lâm Thiên|0|ABC Lê hồng Phong|0120909090"; ?>" />
		</form>
	</body>
</html>