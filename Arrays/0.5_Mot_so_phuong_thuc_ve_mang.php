<meta charset="utf-8" />
<?php
	/*$mang = array(12,51,24,15,85,1,8);
	rsort($mang);
	
	print_r($mang);*/
	
	/*$mang_2_chieu = array(array("NXH","Nguyễn Xuân Hùng"),array("LMT","Lê Minh Thiện"),array("TTH","Trần Trung Hậu"),array("LTT","Lý Trí Tài"),array("ĐHN","Đặng Hoàng Nguyên"),
							array("PML","Phan Minh Lân"),array("NHM","Nguyễn Hữu Minh"),array("PHML","Phạm Huỳnh Minh Lộc"),array("NQT","Nguyễn Quốc Thái"),array("LBT","Lê Bảo Trung"),
							array("NHT","Nguyễn Hữu Tiến"),array("NTP","Nguyễn Thanh Phúc"),array("LGL","Lê Gia Lễ"),array("TVT","Tiêu Vương Trung"),array("NHK","Nguyễn Hồng Khiêm"),
							array("HHV","Hoàng Hữu Việt"),array("NNTP","Nguyễn Ngọc Thanh Phương"),array("PHTP","Phạm Hữu Thiên Phú"),array("LTN","Lê Trọng Nghĩa"));
							
	function so_sanh($a,$b)
	{
		if($a[0] == $b[0])
		{
			return 0;
		}
		else if($a[0] < $b[0])
		{
			return -1;
		}
		else
		{
			return 1;
		}
	}
	
	usort($mang_2_chieu,"so_sanh");
	
	echo "<pre>",print_r($mang_2_chieu),"</pre>";*/
	
	/*
	$mang = array("aaa"=>1,"bbb"=>2,"ccc"=>3);
	$mang2 = array("abc"=>1,"bcd"=>2,"aaa"=>3);
	
	$mang_ghep = array_merge($mang,$mang2);
	echo "<pre>",print_r($mang_ghep),"</pre>";*/
	
	/*$mang = array(1,2,5,6,8,7,9,2,1,6,6,2,8,9);
	$mang_dem_phan_tu = array_count_values($mang);
	echo "<pre>",print_r($mang_dem_phan_tu),"</pre>";
	
	$mang_duy_nhat = array_unique($mang);
	echo "<pre>",print_r($mang_duy_nhat),"</pre>";*/
	
	/*$mang = array(array("id"=>11,"ho_ten"=>"Hùng"),array("id"=>113,"ho_ten"=>"Thiện"),array("id"=>114,"ho_ten"=>"Hậu"),array("id"=>115,"ho_ten"=>"Tài"));
	$mang_cot = array_column($mang, "ho_ten");
	echo "<pre>",print_r($mang_cot),"</pre>";*/
	
	$mang = array("Thanh Phương","Đông Phương","Khánh Phương","Nhật Phương","Lan Phương","Nam Phương","Duy Phương");
	$mang2 = array("Minh Phương","Mỹ Phương","Đông Phương","Hoàng Phương");
	
	$mang_diff = array_diff($mang, $mang2);
	echo "<pre>",print_r($mang_diff),"</pre>";
?>