<meta charset="utf-8" />
<?php
class nhan_vien{
	public $ho_ten;
	private $dia_chi;
	
	function get_dia_chi()
	{
		return $this->dia_chi;
	}
	
	function set_dia_chi($dia_chi_dv)
	{
		$this->dia_chi = $dia_chi_dv;
	}
	
	function nhan_vien($ho_ten_dv, $dia_chi_dv){
		$this->ho_ten = $ho_ten_dv;
		$this->dia_chi = $dia_chi_dv;
	}
}


$nhan_vien_1 = new nhan_vien("Hùng Nguyễn", "123 abc");
$nhan_vien_1->set_dia_chi("456 bcd");
echo "<pre>",print_r($nhan_vien_1),"</pre>";




?>