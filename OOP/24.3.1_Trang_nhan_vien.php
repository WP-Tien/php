<?php
class nhan_vien{
	public $ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh, $luong_co_ban = 1150000;
	
	function __construct($ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh)
	{
		$this->ma_nhan_vien = $ma_nhan_vien;
		$this->ho_ten = $ho_ten;
		$this->dia_chi = $dia_chi;
		$this->so_con = $so_con;
		$this->he_so_luong = $he_so_luong;
		$this->gioi_tinh = $gioi_tinh;
	}
	
	function tinh_luong()
	{
		return $this->he_so_luong * $this->luong_co_ban;
	}
}

class nv_vp extends nhan_vien{
	public $so_ngay_vang, $dinh_muc_vang, $don_gia_phat;
	
	function __construct($ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh, $so_ngay_vang, $dinh_muc_vang)
	{
		parent::__construct($ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh);
		$this->so_ngay_vang = $so_ngay_vang;
		$this->dinh_muc_vang = $dinh_muc_vang;
	}
}

class nv_sx extends nhan_vien{
	public $so_san_pham, $dinh_muc_san_pham, $don_gia_san_pham = 5000;
	
	function __construct($ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh, $so_san_pham, $dinh_muc_san_pham)
	{
		parent::__construct($ma_nhan_vien, $ho_ten, $dia_chi, $so_con, $he_so_luong, $gioi_tinh);
		$this->so_san_pham = $so_san_pham;
		$this->dinh_muc_san_pham = $dinh_muc_san_pham;
	}
	
	function tinh_luong()
	{
		return $this->dinh_muc_san_pham * $this->don_gia_san_pham;
	}
}
?>