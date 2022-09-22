<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
		.ds_danh_lam_thang_canh a{
			font-weight: bold;
		}
		.ds_danh_lam_thang_canh div{
			padding: 10px;
			background: #0ff;
		}
		.block_dltc div{
			text-align: center;
			margin: 20px 0;
		}
		.block_dltc img{
			width: 50%;
			transition-duration: 5s;
		}
		.block_dltc:hover{
			box-shadow: 10px 10px 10px #ccc;
			border: 1px solid #ccc;
			border-radius: 10px;
		}
		.block_dltc:hover img{
			transform: rotate(720deg);
			width: 90%;
			-webkit-filter: grayscale(1);
		}
	</style>
</head>
<body>
	<span id="dau_trang"></span>
	<?php
		$mang_danh_lam = array(array("pq","Phú Quốc","phuquoc.jpg"),array("ht","Hà Tiên","hatien.jpg"),array("ag","An Giang","angiang.jpg"),array("vt","Vũng Tàu","vungtau.jpg"),
								array("pt","Phan Thiết","phanthiet.jpg"),array("dl","Đà Lạt","dalat.jpg"),array("nt","Nha Trang","nhatrang.jpg"),array("dlk","Đăk Lắk","daklak.jpg"),
								array("bt","Bình Thuận","binhthuan.jpg"),array("kt","Kon Tum","kontum.jpg"),array("dn","Đà Nẵng","danang.jpg"),array("hue","Huế","hue.jpg"),
								array("vhl","Vịnh Hạ Long","vinhhalong.jpg"),array("dpn","Động Phong Nha","dongphongnha.jpg"),array("sp","SaPa","sapa.jpg"));
	?>
	<div class="ds_danh_lam_thang_canh col-md-4 col-lg-4">
		<?php
			foreach($mang_danh_lam as $dltc)
			{
				?>
				<div><a href="#<?php echo $dltc[0]; ?>"><?php echo $dltc[1]; ?></a></div>
				<?php
			}
		?>
	</div>
	<div class="col-md-8 col-lg-8">
		<?php
			foreach($mang_danh_lam as $dltc)
			{
				?>
				<div class="block_dltc" id="<?php echo $dltc[0]; ?>">
					<div class="ten_danh_lam_thang_canh"><?php echo $dltc[1] ?></div>
					<div class="hinh_danh_lam_thang_canh"><img src="images/<?php echo $dltc[2] ?>" /></div>
					<div><a href="#dau_trang">Quay về đầu trang</a></div>
				</div>
				<?php
			}
		?>
	</div>
</body>
</html>

