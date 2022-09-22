<?php
// Không có thâm niên
class nhan_vien{
	public $ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_co_ban = 1150000;
	
	function nhan_vien($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien)
	{
		$this->ho_ten = $ho_ten;
		$this->ngay_sinh = $ngay_sinh;
		$this->gioi_tinh = $gioi_tinh;
		$this->ngay_vao_lam = $ngay_vao_lam;
		$this->he_so_luong = $he_so_luong;
		$this->so_con = $so_con;
		$this->tham_nien = $tham_nien;
	}
	
	function tro_cap()
	{
		return $this->so_con * 100000;
	}
	
	function tien_luong()
	{
		return $this->he_so_luong * $this->luong_co_ban;
	}
}

class nv_vp extends nhan_vien{
	public $so_ngay_vang, $dm_vang = 2, $don_gia_phat = 25000;
	
	function nv_vp($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $so_ngay_vang)
	{
		parent::nhan_vien($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien);
		$this->so_ngay_vang = $so_ngay_vang;
	}
	
	function tien_phat()
	{
		if($this->so_ngay_vang - $this->dm_vang > 0)
		{
			return ($this->so_ngay_vang - $this->dm_vang) * $this->don_gia_phat;
		}
		else
		{
			return 0;
		}
	}
	
	function tro_cap()
	{
		if($this->gioi_tinh == 1)
		{
			return parent::tro_cap() * 1.2;
		}
		else
		{
			return parent::tro_cap();
		}
	}
	
	function tien_luong()
	{
		return parent::tien_luong() - $this->tien_phat();
	}
}

class nv_sx extends nhan_vien{
	public $so_san_pham, $dm_san_pham = 100, $don_gia_san_pham = 12000, $tang_ca;
	
	function nv_sx($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $so_san_pham, $tang_ca)
	{
		parent::nhan_vien($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien);
		$this->so_san_pham = $so_san_pham;
		$this->tang_ca = $tang_ca;
	}
	
	function tien_thuong()
	{
		if($this->so_san_pham - $this->dm_san_pham > 0)
		{
			return $this->so_san_pham * $this->don_gia_san_pham * 0.05;
		}
		else
		{
			return $this->so_san_pham * $this->don_gia_san_pham * 0.01;
		}
	}
	
	function tro_cap(){
		return ($this->tang_ca)?(parent::tro_cap() + 200000):(parent::tro_cap());
	}
	
	function tien_luong()
	{
		return $this->so_san_pham * $this->don_gia_san_pham + $this->tien_thuong();
	}
}


if($_POST)
{
	if($_POST["loai_nv"] == 1)
	{
		$nhan_vien = new nv_sx($_POST["ho_ten"], $_POST["ngay_sinh"], $_POST["gioi_tinh"], $_POST["ngay_vao_lam"], $_POST["he_so_luong"], $_POST["so_con"], $_POST["tham_nien"], $_POST["so_san_pham"], $_POST["tang_ca"]);
	}
	else
	{
		$nhan_vien = new nv_vp($_POST["ho_ten"], $_POST["ngay_sinh"], $_POST["gioi_tinh"], $_POST["ngay_vao_lam"], $_POST["he_so_luong"], $_POST["so_con"], $_POST["tham_nien"], $_POST["so_ngay_vang"]);
	}
	
}
?>
<meta charset="utf-8" />
<form  action="" method="post" >
	<table style="background: #7396ff; " cellpadding="4px" callspacing="0px" >
		<tr style=" background:#d90000!important;">
			<td colspan="4" align="center" >QUẢN LÝ NHÂN VIÊN</td>
		</tr>
		<tr>
			<td >Họ và tên</td>
			<td ><input style="width:200px;" type="text" name="ho_ten" value="<?php echo (isset($nhan_vien)) ? $nhan_vien->ho_ten : "";?>" /></td>
			<td >Số con</td>
			<td ><input style="width:200px;" type="text" name="so_con" value="<?php echo (isset($nhan_vien)) ? $nhan_vien->so_con : "";?>" /></td>
		</tr>
		<tr>
			<td >Ngày sinh</td>
			<td ><input style="width:200px;" type="text" name="ngay_sinh" value="<?php echo (isset($nhan_vien)) ? $nhan_vien->ngay_sinh : "";?>" /></td>
			<td >Ngày vào làm</td>
			<td ><input style="width:200px;" type="text" name="ngay_vao_lam" value="<?php echo (isset($nhan_vien)) ? "$nhan_vien->ngay_vao_lam" : "";?>" /></td>
		</tr>
		<tr>
			<td >Giới tính</td>
			<td ><label><input type="radio" name="gioi_tinh" value="0" /> Nam</label>
				<label><input type="radio" name="gioi_tinh" value="1" /> Nữ</label>
			</td>
			<td >Hệ số lương</td>
			<td ><input style="width:200px;" type="text" name="he_so_luong" value="<?php echo (isset($nhan_vien)) ? "$nhan_vien->he_so_luong" : "";?>" /></td>
			
		</tr>
		<tr style="background: #fff; ">
			<td >Loại nhân viên : </td>
			<td colspan="2" ><label><input type="radio" name="loai_nv" value="0" /> Văn phòng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<label><input type="radio" name="loai_nv" value="1" /> Sản xuất</td></label>
			<td ></td>
		</tr>
		<tr style="background: #fff; ">
			<td  ></td>
			<td >Số ngày vắng : <input type="text" name="so_ngay_vang" value="<?php echo (isset($nhan_vien->so_ngay_vang)) ? "$nhan_vien->so_ngay_vang" : ""; ?>" style="width:50px;" /></td>
			<td >Số sản phẩm : <input type="text" name="so_san_pham" value="<?php echo (isset($nhan_vien->so_san_pham)) ? "$nhan_vien->so_san_pham" : ""; ?>" style="width:50px;" /></td>
			<td >Tăng ca : 
				<label><input type="radio" name="tang_ca" value="1" /> Có </label>
				<label><input type="radio" name="tang_ca" value="0" /> Không</label>
			</td>
		</tr>
		<tr>
			<td>Tiền lương </td>
			<td><input readonly value="<?php echo (isset($nhan_vien)) ? ($nhan_vien->tien_luong()) : ""; ?>" /> </td>
			<td>Trợ cấp </td>
			<td><input readonly value="<?php echo (isset($nhan_vien)) ? $nhan_vien->tro_cap() : ""; ?>" /> </td>
		</tr>
		<tr>
			<td colspan="4" align="center" >Thực lĩnh: <input value="<?php echo (isset($nhan_vien)) ? ($nhan_vien->tien_luong() + $nhan_vien->tro_cap()) : ""; ?>" /> </td>
		</tr>
	
		<tr style=" background:#d90000!important;">
			<td align="center" colspan="4">
				<input type="submit"  value="Tính lương" /> 
			</td>
		</tr>
	</table>
	</form>