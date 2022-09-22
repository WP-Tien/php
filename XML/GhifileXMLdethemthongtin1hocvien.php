<meta charset="utf-8" />
<?php

	$ten = $_POST["txtTen"];
	$ngaysinh = $_POST["txtNgaysinh"];
	$diachi = $_POST["txtDiachi"];
	$dienthoai = $_POST["txtDienthoai"];
	$result ="";
if($_POST)	
{
	if( isset($_POST["txtTen"]) && isset($_POST["txtNgaysinh"]) && isset($_POST["txtDiachi"])  && isset($_POST["txtDienthoai"])   )
	{
		$tai_lieu = new DOMDocument();
		$tai_lieu->load("xml/hoc_vien.xml");
		$node_goc = $tai_lieu->documentElement;

		$node_con_moi = $tai_lieu->createElement("hoc_vien");	 /*Tag*/
		$node_con_moi->setAttribute("ho_ten","$ten");			/*Name*/
		$node_con_moi->setAttribute("ngay_sinh","$ngaysinh");	
		$node_con_moi->setAttribute("dia_chi","$diachi");
		$node_con_moi->setAttribute("dien_thoai","$dienthoai");

		$node_goc->appendChild($node_con_moi);

		$tai_lieu->save("xml/hoc_vien.xml");
		
		$result = "Thêm thành công";
	}
	else 
	{
		$result = "Thêm thất bại";
	}
}

?>

<form action="" method="POST">
		<table border="1">
				<caption> Thêm học viên </caption>
				<tr>
					<td> Họ tên: </td>
					<td><input name="txtTen" type="text" placeholder="Nhập họ và tên" /></td>
				</tr>
				<tr>
					<td> Ngày sinh: </td>
					<td><input name="txtNgaysinh" type="text" placeholder="Nhập ngày sinh" /></td>
				</tr>
								<tr>
					<td> Địa chỉ: </td>
					<td><input name="txtDiachi" type="text" placeholder="Nhập địa chỉ" /></td>
				</tr>
								<tr>
					<td> Điện thoại:  </td>
					<td><input name="txtDienthoai" type="text" placeholder="Nhập điện thoại" /></td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;<?php echo $result;?></td>
				</tr>
				<tr>
					<td colspan="2"><input name="" type="submit" value="Ghi" /></td>
				</tr>
		</table>
</form>
				
						
