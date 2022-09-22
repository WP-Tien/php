<meta charset="utf-8"/>
<style >
	.hovergallery img{
		widtd:20px;
		height:20px;
		-webkit-transition-duration: 0.5s; /*Webkit: Animation duration*/
		-moz-transition-duration: 0.3s; /*Mozilla duration version*/
		-o-transition-duration: 0.3s; /*Opera duration version*/
		opacity: 0.7; /*initial opacity of images*/
		
	}
	.hovergallery img:hover{
		-webkit-transform:scale(20); /*Webkit: Scale up image to 1.2x original size*/
		-moz-transform:scale(20); /*Mozilla scale version*/
		-o-transform:scale(20); /*Opera scale version*/
		opacity: 1;
	}
</style>
<?php
class sinh_vat{
	public  $ten_khoa_hoc, $loai, $hinh_thuc_ss, $hinh_anh, $ty_le_ss, $mo_ta;
	
	function sinh_vat($ten_khoa_hoc, $loai, $hinh_thuc_ss, $hinh_anh, $ty_le_ss, $mo_ta){
		$this->ten_khoa_hoc = $ten_khoa_hoc;
		$this->loai = $loai;
		$this->hinh_thuc_ss = $hinh_thuc_ss;
		$this->hinh_anh = $hinh_anh;
		$this->ty_le_ss = $ty_le_ss;
		$this->mo_ta = $mo_ta;
		
	}
	function in_thong_tin(){
?>
		<table border="2px" align="center" callspacing="0">
		<caption>Thông tin cơ bản </caption>
			<tr>
				<td width=200px; height=20px;> Tên khoa học</td>
				<td width=200px; height=20px;><?php echo $this->ten_khoa_hoc; ?> </td>
			</tr>
			<tr>
				<td> Loại : </td>
				<td><?php echo $this->loai; ?> </td>
			</tr>
			<tr>
				<td>Hình thức sinh sản </td>
				<td><?php echo $this->hinh_thuc_ss; ?> </td>
			</tr>
			<tr>
				<td>Hình ảnh </td>
				<td class="hovergallery"><img  src="<?php echo $this->hinh_anh;?>" alt="Hinh.anh"/> </td>
			</tr>
			<tr>
				<td>Tỷ lệ sinh sản </td>
				<td><?php echo $this->ty_le_ss; ?> </td>
			</tr>
			<tr>
				<td>Mô tả </td>
				<td><?php echo $this->mo_ta; ?> </td>
			</tr>
		</table>
<?php
	}
	function tinh_so_con(){
		
	}
}

class dong_vat extends sinh_vat{
	public  $toc_do_di_chuyen, $hinh_thuc_di_chuyen;
	function dong_vat($ten_khoa_hoc, $loai, $hinh_thuc_ss, $hinh_anh, $ty_le_ss, $mo_ta,$toc_do_di_chuyen, $hinh_thuc_di_chuyen){
		parent:: sinh_vat($toc_do_di_chuyen, $hinh_thuc_di_chuyen);
		$this->toc_do_di_chuyen = $toc_do_di_chuyen;
		$this->hinh_thuc_di_chuyen = $hinh_thuc_di_chuyen;
	}
	function tinh_quang_duong_ngay(){
		return $this->toc_do_di_chuyen * 86400;
	}
}

class thuc_vat extends sinh_vat{
	public  $toc_do_ss_oxi, $loai_la;
	function thuc_vat($ten_khoa_hoc, $loai, $hinh_thuc_ss, $hinh_anh, $ty_le_ss, $mo_ta,$toc_do_ss_oxi, $loai_la){
		parent:: sinh_vat($toc_do_ss_oxi, $loai_la);
		$this->toc_do_ss_oxi = $toc_do_ss_oxi;
		$this->loai_la = $loai_la;
	}
	function tinh_lit_oxi_nam(){
		return ($this->toc_do_ss_oxi * 365.25 * 86400)/1000;
	}
}

$animal= new sinh_vat("Panthera leo","động vật có vú thuộc chi Báo, họ Mèo","đẻ con","lion.jpg","N/A","Big-Fast");
$animal->in_thong_tin();
//$animal= new dong_vat("Panthera leo","động vật có vú thuộc chi Báo, họ Mèo","đẻ con","lion.jpg","N/A","Big-Fast",80,"chạy");
?>