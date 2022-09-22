<meta charset="utf-8" />
<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
	table img{
		width: 300px;
	}
	.thong_tin_chi_tiet_xe{
		position: absolute;
		top: 0;
		right: -100px;
		background: #ccc;
		border-radius: 20px 20px 20px 0;
		padding: 10px;
		animation: lac_lac 3s infinite;
		display: none;
	}
	@keyframes lac_lac{
		0%{transform: skew(-1deg, -1deg);}
		50%{transform: skew(-5deg, -5deg);}
		100%{transform: skew(-1deg, -1deg);}
	}
	img:hover + .thong_tin_chi_tiet_xe{
		display: block;
	}
</style>
<?php
class xe{
	public $ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $thue_gtgt = 0.1, $so_km_trung_binh_tren_nam, $hinh_xe;
	
	function xe($ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam, $hinh_xe)
	{
		$this->ten_xe = $ten_xe;
		$this->chieu_dai = $chieu_dai;
		$this->chieu_rong = $chieu_rong;
		$this->chieu_cao = $chieu_cao;
		$this->bien_so = $bien_so;
		$this->mau_sac = $mau_sac;
		$this->gia_nhap = $gia_nhap;
		$this->gia_ban = $gia_ban;
		$this->hang_xe = $hang_xe;
		$this->ngay_san_xuat = $ngay_san_xuat;
		$this->xuat_xu = $xuat_xu;
		$this->so_may = $so_may;
		$this->so_khung = $so_khung;
		$this->so_km_trung_binh_tren_nam = $so_km_trung_binh_tren_nam;
		$this->hinh_xe = $hinh_xe;
	}
	
	function don_gia_ban()
	{
		return $this->gia_ban + $this->gia_ban * $this->thue_gtgt;
	}
	
	function khoang_cach_an_toan()
	{
		$kc_truoc_sau = $this->chieu_dai * 0.2;
		$kc_hai_ben = $this->chieu_rong * 0.2;
		return array("kc_truoc_sau"=>$kc_truoc_sau, "kc_hai_ben"=>$kc_hai_ben);
	}
	
	function tinh_luong_khi_thai()
	{
		$luong_khi_thai_hc = $this->so_km_trung_binh_tren_nam;
		$luong_khi_thai_co = $this->so_km_trung_binh_tren_nam * 12;
		return array("luong_khi_thai_hc"=>$luong_khi_thai_hc, "luong_khi_thai_co" =>$luong_khi_thai_co);
	}
}

class xe_may extends xe{
	public $phan_khoi, $loai_xe_may;
	
	function xe_may($ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam, $phan_khoi, $loai_xe_may, $hinh_xe)
	{
		parent::xe($ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam, $hinh_xe);
		$this->phan_khoi = $phan_khoi;
		$this->loai_xe_may = $loai_xe_may;
	}
	
	function don_gia_ban()
	{
		if($this->loai_xe_may == "tay_ga")
		{
			return parent::don_gia_ban() + $this->gia_ban * 0.04;
		}
		else
		{
			return parent::don_gia_ban();
		}
	}
	
	function save_xml_xe_moi()
	{
		$tai_lieu = new DOMDocument();
		$tai_lieu->preserveWhiteSpace = false;
		$tai_lieu->formatOutput = true;
		$tai_lieu->load("du_lieu/kho_xe.xml");
		$node_goc = $tai_lieu->documentElement;
		
		$xe_moi = $tai_lieu->createElement("xe_may");
		
		$node_ten_xe = $tai_lieu->createElement("ten_xe");
		$node_ten_xe->nodeValue = $this->ten_xe;
		$node_chieu_dai = $tai_lieu->createElement("chieu_dai");
		$node_chieu_dai->nodeValue = $this->chieu_dai;
		$node_chieu_rong = $tai_lieu->createElement("chieu_rong");
		$node_chieu_rong->nodeValue = $this->chieu_rong;
		$node_chieu_cao = $tai_lieu->createElement("chieu_cao");
		$node_chieu_cao->nodeValue = $this->chieu_cao;
		$node_bien_so = $tai_lieu->createElement("bien_so");
		$node_bien_so->nodeValue = $this->bien_so;
		$node_mau_sac = $tai_lieu->createElement("mau_sac");
		$node_mau_sac->nodeValue = $this->mau_sac;
		$node_gia_nhap = $tai_lieu->createElement("gia_nhap");
		$node_gia_nhap->nodeValue = $this->gia_nhap;
		$node_gia_ban = $tai_lieu->createElement("gia_ban");
		$node_gia_ban->nodeValue = $this->gia_ban;
		$node_hang_xe = $tai_lieu->createElement("hang_xe");
		$node_hang_xe->nodeValue = $this->hang_xe;
		$node_ngay_san_xuat = $tai_lieu->createElement("ngay_san_xuat");
		$node_ngay_san_xuat->nodeValue = $this->ngay_san_xuat;
		$node_xuat_xu = $tai_lieu->createElement("xuat_xu");
		$node_xuat_xu->nodeValue = $this->xuat_xu;
		$node_so_may = $tai_lieu->createElement("so_may");
		$node_so_may->nodeValue = $this->so_may;
		$node_so_khung = $tai_lieu->createElement("so_khung");
		$node_so_khung->nodeValue = $this->so_khung;
		$node_so_km_trung_binh_tren_nam = $tai_lieu->createElement("so_km_trung_binh_tren_nam");
		$node_so_km_trung_binh_tren_nam->nodeValue = $this->so_km_trung_binh_tren_nam;
		$node_phan_khoi = $tai_lieu->createElement("phan_khoi");
		$node_phan_khoi->nodeValue = $this->phan_khoi;
		$node_loai_xe_may = $tai_lieu->createElement("loai_xe_may");
		$node_loai_xe_may->nodeValue = $this->loai_xe_may;
		$node_gia_ban_da_tinh_thue = $tai_lieu->createElement("gia_ban_da_tinh_thue");
		$node_gia_ban_da_tinh_thue->nodeValue = $this->don_gia_ban();
		$node_hinh_xe = $tai_lieu->createElement("hinh_xe");
		$node_hinh_xe->nodeValue = $this->hinh_xe;
		
		$xe_moi->appendChild($node_ten_xe);
		$xe_moi->appendChild($node_chieu_dai);
		$xe_moi->appendChild($node_chieu_rong);
		$xe_moi->appendChild($node_chieu_cao);
		$xe_moi->appendChild($node_bien_so);
		$xe_moi->appendChild($node_mau_sac);
		$xe_moi->appendChild($node_gia_nhap);
		$xe_moi->appendChild($node_gia_ban);
		$xe_moi->appendChild($node_hang_xe);
		$xe_moi->appendChild($node_ngay_san_xuat);
		$xe_moi->appendChild($node_xuat_xu);
		$xe_moi->appendChild($node_so_may);
		$xe_moi->appendChild($node_so_khung);
		$xe_moi->appendChild($node_so_km_trung_binh_tren_nam);
		$xe_moi->appendChild($node_phan_khoi);
		$xe_moi->appendChild($node_loai_xe_may);
		$xe_moi->appendChild($node_gia_ban_da_tinh_thue);
		$xe_moi->appendChild($node_hinh_xe);
		
		$node_goc->appendChild($xe_moi);
		
		$tai_lieu->save("du_lieu/kho_xe.xml");
	}
}

class xe_hoi extends xe{
	public $ma_luc, $loai_xe_hoi;
	
	function xe_hoi($ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam, $ma_luc, $loai_xe_hoi, $hinh_xe)
	{
		parent::xe($ten_xe, $chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam, $hinh_xe);
		$this->ma_luc = $ma_luc;
		$this->loai_xe_hoi = $loai_xe_hoi;
	}
	
	function don_gia_ban()
	{
		if($this->loai_xe_hoi == "xe_dien")
		{
			return parent::don_gia_ban() + $this->gia_ban * 0.2;
		}
		else
		{
			return parent::don_gia_ban() + $this->gia_ban * 0.5;
		}
	}
	
	function khoang_cach_an_toan()
	{
		$kc_truoc_sau = $this->chieu_dai * 0.2 * 2;
		$kc_hai_ben = $this->chieu_rong * 0.2 * 2;
		return array("kc_truoc_sau"=>$kc_truoc_sau, "kc_hai_ben"=>$kc_hai_ben);
	}
	
	function tinh_luong_khi_thai()
	{
		$luong_khi_thai_hc = $this->so_km_trung_binh_tren_nam * 3;
		$luong_khi_thai_co = $this->so_km_trung_binh_tren_nam * 12 * 3;
		return array("luong_khi_thai_hc"=>$luong_khi_thai_hc, "luong_khi_thai_co" =>$luong_khi_thai_co);
	}
	
	function save_xml_xe_moi()
	{
		$tai_lieu = new DOMDocument();
		$tai_lieu->preserveWhiteSpace = false;
		$tai_lieu->formatOutput = true;
		$tai_lieu->load("du_lieu/kho_xe.xml");
		$node_goc = $tai_lieu->documentElement;
		
		$xe_moi = $tai_lieu->createElement("xe_hoi");
		
		$node_ten_xe = $tai_lieu->createElement("ten_xe");
		$node_ten_xe->nodeValue = $this->ten_xe;
		$node_chieu_dai = $tai_lieu->createElement("chieu_dai");
		$node_chieu_dai->nodeValue = $this->chieu_dai;
		$node_chieu_rong = $tai_lieu->createElement("chieu_rong");
		$node_chieu_rong->nodeValue = $this->chieu_rong;
		$node_chieu_cao = $tai_lieu->createElement("chieu_cao");
		$node_chieu_cao->nodeValue = $this->chieu_cao;
		$node_bien_so = $tai_lieu->createElement("bien_so");
		$node_bien_so->nodeValue = $this->bien_so;
		$node_mau_sac = $tai_lieu->createElement("mau_sac");
		$node_mau_sac->nodeValue = $this->mau_sac;
		$node_gia_nhap = $tai_lieu->createElement("gia_nhap");
		$node_gia_nhap->nodeValue = $this->gia_nhap;
		$node_gia_ban = $tai_lieu->createElement("gia_ban");
		$node_gia_ban->nodeValue = $this->gia_ban;
		$node_hang_xe = $tai_lieu->createElement("hang_xe");
		$node_hang_xe->nodeValue = $this->hang_xe;
		$node_ngay_san_xuat = $tai_lieu->createElement("ngay_san_xuat");
		$node_ngay_san_xuat->nodeValue = $this->ngay_san_xuat;
		$node_xuat_xu = $tai_lieu->createElement("xuat_xu");
		$node_xuat_xu->nodeValue = $this->xuat_xu;
		$node_so_may = $tai_lieu->createElement("so_may");
		$node_so_may->nodeValue = $this->so_may;
		$node_so_khung = $tai_lieu->createElement("so_khung");
		$node_so_khung->nodeValue = $this->so_khung;
		$node_so_km_trung_binh_tren_nam = $tai_lieu->createElement("so_km_trung_binh_tren_nam");
		$node_so_km_trung_binh_tren_nam->nodeValue = $this->so_km_trung_binh_tren_nam;
		$node_ma_luc = $tai_lieu->createElement("ma_luc");
		$node_ma_luc->nodeValue = $this->ma_luc;
		$node_loai_xe_hoi = $tai_lieu->createElement("loai_xe_hoi");
		$node_loai_xe_hoi->nodeValue = $this->loai_xe_hoi;
		$node_gia_ban_da_tinh_thue = $tai_lieu->createElement("gia_ban_da_tinh_thue");
		$node_gia_ban_da_tinh_thue->nodeValue = $this->don_gia_ban();
		$node_hinh_xe = $tai_lieu->createElement("hinh_xe");
		$node_hinh_xe->nodeValue = $this->hinh_xe;
		
		$xe_moi->appendChild($node_ten_xe);
		$xe_moi->appendChild($node_chieu_dai);
		$xe_moi->appendChild($node_chieu_rong);
		$xe_moi->appendChild($node_chieu_cao);
		$xe_moi->appendChild($node_bien_so);
		$xe_moi->appendChild($node_mau_sac);
		$xe_moi->appendChild($node_gia_nhap);
		$xe_moi->appendChild($node_gia_ban);
		$xe_moi->appendChild($node_hang_xe);
		$xe_moi->appendChild($node_ngay_san_xuat);
		$xe_moi->appendChild($node_xuat_xu);
		$xe_moi->appendChild($node_so_may);
		$xe_moi->appendChild($node_so_khung);
		$xe_moi->appendChild($node_so_km_trung_binh_tren_nam);
		$xe_moi->appendChild($node_ma_luc);
		$xe_moi->appendChild($node_loai_xe_hoi);
		$xe_moi->appendChild($node_gia_ban_da_tinh_thue);
		$xe_moi->appendChild($node_hinh_xe);
		
		$node_goc->appendChild($xe_moi);
		
		$tai_lieu->save("du_lieu/kho_xe.xml");
	}
}


$thongbao = "";
$co = 1;

if($_POST)
{
	if(empty($_POST["ten_xe"]))
	{
		$thongbao = "Warrning! Nhập tên xe";
		$co = 0;
	}
	else if (empty($_POST["bien_so"]))
	{
		$thongbao = "Warrning! Nhập biển số";
		$co = 0;
	}
	else if (empty($_POST["chieu_dai"]))
	{
		$thongbao = "Warrning! Nhập chiều dài";
		$co = 0;
	}
	else if (!is_numeric($_POST["chieu_dai"]))
	{
		$thongbao = "Warrning! Chiều dài là số";
		$co = 0;
	}
	else if (empty($_POST["chieu_rong"]))
	{
		$thongbao = "Warrning! Nhập chiều rộng";
		$co = 0;
	}
	else if (!is_numeric($_POST["chieu_rong"]))
	{
		$thongbao = "Warrning! Chiều rộng là số";
		$co = 0;
	}
	else if (empty($_POST["chieu_cao"]))
	{
		$thongbao = "Warrning! Nhập chiều cao";
		$co = 0;
	}
	else if (!is_numeric($_POST["chieu_cao"]))
	{
		$thongbao = "Warrning! Chiều cao là số";
		$co = 0;
	}
	else if (empty($_POST["so_km_trung_binh_tren_nam"]))
	{
		$thongbao = "Warrning! Nhập số km trung bình trên năm";
		$co = 0;
	}
	else if (!is_numeric($_POST["so_km_trung_binh_tren_nam"]))
	{
		$thongbao = "Warrning! Số km phải là số";
		$co = 0;
	}
	else if (empty($_POST["gia_nhap"]))
	{
		$thongbao = "Warrning! Nhập giá nhập";
		$co = 0;
	}
	else if (!is_numeric($_POST["gia_nhap"]))
	{
		$thongbao = "Warrning! Giá nhập là số";
		$co = 0;
	}
	else if (empty($_POST["gia_ban"]))
	{
		$thongbao = "Warrning! Nhập giá bán";
		$co = 0;
	}
	else if (!is_numeric($_POST["gia_ban"]))
	{
		$thongbao = "Warrning! Giá bán phải là số";
		$co = 0;
	}
	else if (empty($_POST["mau_sac"]))
	{
		$thongbao = "Warrning! Nhập màu sắc";
		$co = 0;
	}
	else if (empty($_POST["hang_xe"]))
	{
		$thongbao = "Warrning! Nhập hãng xe";
		$co = 0;
	}
	else if (empty($_POST["ngay_san_xuat"]))
	{
		$thongbao = "Warrning! Nhập ngày sản xuất";
		$co = 0;
	}
	else if (empty($_POST["xuat_xu"]))
	{
		$thongbao = "Warrning! Nhập xuất xứ";
		$co = 0;
	}
	else if (empty($_POST["so_khung"]))
	{
		$thongbao = "Warrning! nhập số khung";
		$co = 0;
	}
	else if (empty($_POST["so_may"]))
	{
		$thongbao = "Warrning! nhập số máy";
		$co = 0;
	}
	
	if($_POST["loai_xe"] == "xe_may")
	{
		if(empty($_POST["phan_khoi"]))
		{
			$thongbao = "Warrning! Nhập phân khối";
			$co = 0;
		}
		
		$xe = new xe_may($_POST["ten_xe"], $_POST["chieu_dai"], $_POST["chieu_rong"], $_POST["chieu_cao"], $_POST["bien_so"], $_POST["mau_sac"], $_POST["gia_nhap"], $_POST["gia_ban"], $_POST["hang_xe"], $_POST["ngay_san_xuat"], $_POST["xuat_xu"], $_POST["so_may"], $_POST["so_khung"], $_POST["so_km_trung_binh_tren_nam"], $_POST["phan_khoi"], $_POST["loai_xe_may"], $_FILES["hinh_upload"]["name"]);
	}
	else
	{
		if(empty($_POST["ma_luc"]))
		{
			$thongbao = "Warrning! Nhập mã lực";
			$co = 0;
		}
		
		$xe = new xe_hoi($_POST["ten_xe"], $_POST["chieu_dai"], $_POST["chieu_rong"], $_POST["chieu_cao"], $_POST["bien_so"], $_POST["mau_sac"], $_POST["gia_nhap"], $_POST["gia_ban"], $_POST["hang_xe"], $_POST["ngay_san_xuat"], $_POST["xuat_xu"], $_POST["so_may"], $_POST["so_khung"], $_POST["so_km_trung_binh_tren_nam"], $_POST["ma_luc"], $_POST["loai_xe_hoi"], $_FILES["hinh_upload"]["name"]);
	}
	
	if($co == 1)
	{
		move_uploaded_file($_FILES["hinh_upload"]["tmp_name"],"images/" . $_FILES["hinh_upload"]["name"]);
		
		$xe->save_xml_xe_moi();
	}
}
?>
<style>
	.header{
		font-weight: bold;
		color: #900;
		background: #ff8;
		text-align: center;
		font-size: 25px;
	}
	table{
		margin: auto;
	}
</style>
<div class="container">
	<?php
	//$chieu_dai, $chieu_rong, $chieu_cao, $bien_so, $mau_sac, $gia_nhap, $gia_ban, $hang_xe, $ngay_san_xuat, $xuat_xu, $so_may, $so_khung, $so_km_trung_binh_tren_nam;
	?>
	<form action="" method="post" enctype="multipart/form-data">
	<h5 style="color:red; text-align:center"><?php echo $thongbao;?></h5>
		<table cellspacing="0" cellpadding="10" border="1" class="table">
			<tr class="header">
				<td colspan="4">Quản lý kho xe</td>
			</tr>
			<tr>
				<td>
					Chọn loại xe (xe máy/xe hơi):
				</td>
				<td>
					<select name="loai_xe" id="loai_xe" class="form-control" onchange="thay_doi()">
						<option value="xe_may" <?php if($_POST["loai_xe"] == "xe_may") echo "selected"; ?>>Xe máy</option>
						<option value="xe_hoi" <?php if($_POST["loai_xe"] == "xe_hoi") echo "selected"; ?>>Xe hơi</option>
					</select>
				</td>
				<td>
					Tên xe: <input class="form-control" type="text" name="ten_xe" value="<?php echo $_POST["ten_xe"] ?>" />
				</td>
				<td>
					Biển số: <input class="form-control" type="text" name="bien_so" value="<?php echo $_POST["bien_so"] ?>" />
				</td>
			</tr>
			<tr>
				<td>
					Dài: <input class="form-control" type="text" name="chieu_dai" value="<?php echo $_POST['chieu_dai'] ?>" />	
				</td>
				<td>
					Rộng: <input class="form-control" type="text" name="chieu_rong" value="<?php echo $_POST['chieu_rong'] ?>" />	
				</td>
				<td>
					Cao: <input class="form-control" type="text" name="chieu_cao" value="<?php echo $_POST['chieu_cao'] ?>" />
				</td>
				<td>
					Số km/năm: <input class="form-control" type="text" name="so_km_trung_binh_tren_nam" value="<?php echo $_POST['so_km_trung_binh_tren_nam'] ?>" />
				</td>
			</tr>
			<tr>
				<td>
					Giá nhập xe:
				</td>
				<td>
					<input class="form-control" type="text" name="gia_nhap" value="<?php echo $_POST['gia_nhap'] ?>" />
				</td>
				<td>
					Giá bán xe:
				</td>
				<td>
					<input class="form-control" type="text" name="gia_ban" value="<?php echo $_POST['gia_ban'] ?>" />
				</td>
			</tr>
			<tr>
				<td>
					Màu sắc:
				</td>
				<td>
					<input class="form-control" type="text" name="mau_sac" value="<?php echo $_POST['mau_sac'] ?>" />
				</td>
				<td>
					Hãng xe:
				</td>
				<td>
					<input class="form-control" type="text" name="hang_xe" value="<?php echo $_POST['hang_xe'] ?>" />
				</td>
			</tr>
			<tr>
				<td>
					Ngày sản xuất:
				</td>
				<td>
					<input class="form-control" type="text" name="ngay_san_xuat" value="<?php echo $_POST['ngay_san_xuat'] ?>" />
				</td>
				<td>
					Xuất xứ:
				</td>
				<td>
					<input class="form-control" type="text" name="xuat_xu" value="<?php echo $_POST['xuat_xu'] ?>" />
				</td>
			</tr>
			<tr>
				<td>
					Số khung:
				</td>
				<td>
					<input class="form-control" type="text" name="so_khung" value="<?php echo $_POST['so_khung'] ?>" />
				</td>
				<td>
					Số máy:
				</td>
				<td>
					<input class="form-control" type="text" name="so_may" value="<?php echo $_POST['so_may'] ?>" />
				</td>
			</tr>
			<!-- phần riêng giừa các loại xe -->
			<!-- nếu là xe máy -->
			<tr id="xe_may_form">
				<td>
					Phân khối:
				</td>
				<td>
					<input class="form-control" type="text" name="phan_khoi" value="<?php echo $_POST['phan_khoi'] ?>" />
				</td>
				<td>
					Loại xe máy:
				</td>
				<td>
					<select name="loai_xe_may" class="form-control">
						<option value="tay_ga" <?php if($_POST["loai_xe_may"] == "tay_ga") echo "selected"; ?>>Tay ga</option>
						<option value="xe_so" <?php if($_POST["loai_xe_may"] == "xe_so") echo "selected"; ?>>Xe số</option>
					</select>
				</td>
			</tr>
			<!-- nếu là xe hơi -->
			<tr id="xe_hoi_form" style="opacity: 0">
				<td>
					Mã lực:
				</td>
				<td>
					<input class="form-control" type="text" name="ma_luc" value="<?php echo $_POST['ma_luc']?>" />
				</td>
				<td>
					Loại xe hơi:
				</td>
				<td>
					<select name="loai_xe_hoi" class="form-control">
						<option value="xe_xang_dau" <?php if($_POST["loai_xe_hoi"] == "xe_xang_dau") echo "selected"; ?>>Chạy bằng xăng/dầu</option>
						<option value="xe_dien"  <?php if($_POST["loai_xe_hoi"] == "xe_dien") echo "selected"; ?>>Chạy bằng điện</option>
					</select>
				</td>
			</tr>
			<!-- phần riêng giừa các loại xe -->
			<tr>
				<td colspan="4" style="text-align: center;">
					<input type="file" name="hinh_upload" />
				</td>
			</tr>
			<tr>
				<td colspan="4" style="text-align: center;">
					<input class="form-control btn-success" type="submit" name="luu_thong_tin" value="Lưu thông tin xe" style="padding: 5px 10px;" />
				</td>
			</tr>
		</table>
	</form>
	
	<?php
	$danh_sach_xe = simplexml_load_file("du_lieu/kho_xe.xml");
	//echo "<pre>",print_r($data),"</pre>";
	?>
	
	<h1>Danh sách xe trong kho</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tên xe</th>
				<th>Hình xe</th>
				<th>Giá nhập</th>
				<th>Giá bán chưa tính thuế</th>
				<th>Giá bán(đã tính thuế)</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
			
			// danh sach xe may
			foreach($danh_sach_xe->xe_may as $xe_may)
			{
			?>
			<tr>
				<td><?php echo $xe_may->ten_xe; ?></td>
				<td style="position: relative;">
					<img src="images/<?php echo $xe_may->hinh_xe; ?>" />
					<div class="thong_tin_chi_tiet_xe">
						Hãng xe: <?php echo $xe_may->hang_xe; ?><br/>
						Xuất xứ: <?php echo $xe_may->xuat_xu; ?><br/>
						Phân khối: <?php echo $xe_may->phan_khoi; ?><br/>
						Loại xe máy: <?php echo $xe_may->loai_xe_may; ?><br/>
					</div>
				</td>
				<td><?php echo number_format((float)$xe_may->gia_nhap,0,",","."); ?> VNĐ</td>
				<td><?php echo number_format((float)$xe_may->gia_ban,0,",","."); ?> VNĐ</td>
				<td><?php echo number_format((float)$xe_may->gia_ban_da_tinh_thue,0,",","."); ?> VNĐ</td>
			</tr>
			<?php
			}
			?>
			<?php
			//danh sach xe hoi
			foreach($danh_sach_xe->xe_hoi as $xe_hoi)
			{
			?>
			<tr>
				<td><?php echo $xe_hoi->ten_xe; ?></td>
				<td style="position: relative;">
					<img src="images/<?php echo $xe_hoi->hinh_xe; ?>" />
					<div class="thong_tin_chi_tiet_xe">
						Hãng xe: <?php echo $xe_hoi->hang_xe; ?><br/>
						Xuất xứ: <?php echo $xe_hoi->xuat_xu; ?><br/>
						Mã lực: <?php echo $xe_hoi->ma_luc; ?><br/>
						Loại xe hơi: <?php echo $xe_hoi->loai_xe_hoi; ?><br/>
					</div>
				</td>
				<td><?php echo number_format((float)$xe_hoi->gia_nhap,0,",","."); ?> VNĐ</td>
				<td><?php echo number_format((float)$xe_hoi->gia_ban,0,",","."); ?> VNĐ</td>
				<td><?php echo number_format((float)$xe_hoi->gia_ban_da_tinh_thue,0,",","."); ?> VNĐ</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
<script>
	function thay_doi()
	{
		loai_xe = document.getElementById("loai_xe");
		if(loai_xe.value == "xe_may")
		{
			document.getElementById("xe_may_form").style.opacity = "1";
			document.getElementById("xe_hoi_form").style.opacity = "0";
		}
		else
		{
			document.getElementById("xe_may_form").style.opacity = "0";
			document.getElementById("xe_hoi_form").style.opacity = "1";
		}
	}
</script>