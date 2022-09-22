<?php
	$mang = array(
		array("id"=>0,"ten_dong_vat"=>"Chim cánh cụt","mo_ta_chi_tiet"=>"Chim cánh bị cụt => chim cánh cụt"),
		array("id"=>1,"ten_dong_vat"=>"Gấu trắng bắc cực","mo_ta_chi_tiet"=>"Màu trắng sống ở hướng Bắc, ăn nhiều + ngủ cũng nhiều"),
		array("id"=>2,"ten_dong_vat"=>"Lạc Đà","mo_ta_chi_tiet"=>"quá đà đi lạc => gọi là Lạc Đà"),
		array("id"=>3,"ten_dong_vat"=>"Thỏ","mo_ta_chi_tiet"=>"Con thỏ => nó nhỏ => thích ăn củ cải đỏ => bên bờ cỏ => ăn bằng cái mỏ"),
		array("id"=>4,"ten_dong_vat"=>"Hổ","mo_ta_chi_tiet"=>"Hổ báo ở trường mẫu giáo.")
	);

	function array_orderby()
	{
		$args = func_get_args();
			echo "<pre>",print_r($args),"</pre>";
		$data = array_shift($args); // 1 mang 2 chieu 
			echo "<pre>",print_r($data),"</pre>";
		foreach ($args as $n => $field) {
			if (is_string($field)) {
				$tmp = array();
				foreach ($data as $key => $row)
					$tmp[$key] = $row[$field];
				$args[$n] = $tmp;
			}
		}
		
		//echo "<pre>",print_r($args),"</pre>";
		$args[] = &$data;
		
		//echo "<pre>",print_r($args),"</pre>";
		call_user_func_array('array_multisort', $args);
		//echo "<pre>",print_r($args),"</pre>";
		return array_pop($args);
	}


	$mang_sap_xep = array_orderby($mang, 'ten_dong_vat');


	//usort($mang, "compare");
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 danh_sach_dong_vat">
			<?php
			foreach($mang_sap_xep as $dong_vat)
			{
			?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item_dong_vat">
				<a href="Trang_tu_dien_dong_vat.php?id_dv=<?php echo $dong_vat["id"] ?>"><?php echo $dong_vat["ten_dong_vat"] ?></a>
			</div>
			<?php
			}
			?>
		</div>

		<?php
		if($_GET["id_dv"])
		{
			$id_dv = $_GET["id_dv"];
		}
		else
		{
			$id_dv = 0;
		}
		?>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 thong_tin_chi_tiet_dong_vat">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ten_dong_vat">
				<?php echo $mang[$id_dv]["ten_dong_vat"]; ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mo_ta_chi_tiet">
				<?php echo $mang[$id_dv]["mo_ta_chi_tiet"]; ?>
			</div>
		</div>
	</body>
</html>
