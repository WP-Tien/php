<meta charset="utf-8" />
<?php
if($_POST)
{
		$hoten=$_POST["hoten"];
		$ngaysinh=$_POST["ngaysinh"];
		$diachi=$_POST["diachi"];
		$dienthoai=$_POST["dienthoai"];
}
 ?>
<form action="" method="post">
<table border="1">
	<tr>
		<td colspan="2">Thêm học viên</td>
	</tr>
	<tr>
		<td>Họ tên:</td>
		<td><input type="text" name="hoten" value="<?php echo $hoten; ?>"/></td>
	</tr>
	<tr>
		<td>Ngày sinh:</td>
		<td><input type="text" name="ngaysinh" value="<?php echo $ngaysinh; ?>"/></td>
	</tr>
	<tr>
		<td>Địa chỉ:</td>
		<td><input type="text" name="diachi" value="<?php echo $diachi; ?>"/></td>
	</tr>
	<tr>
		<td>Điện thoại:</td>
		<td><input type="text" name="dienthoai" value="<?php echo $dienthoai; ?>"/></td>
	</tr>
	<tr>
		<td colspan="2">
		<input type="text" readonly value="<?php 
		if($_POST["hoten"]&&$_POST["ngaysinh"]&&$_POST["diachi"]&&$_POST["dienthoai"])
		{
		
			
			$tai_lieu = new DOMDocument();
			$tai_lieu->preserveWhiteSpace = false; 
			$tai_lieu->formatOutput = true; 
			$tai_lieu->load("xml/du_lieu.xml");
			$node_goc = $tai_lieu->documentElement;
			$node_con_moi = $tai_lieu->createElement("hoc_vien");
			$node_con_moi->setAttribute("hoten",$_POST["hoten"]);
			$node_con_moi->setAttribute("ngaysinh",$_POST["ngaysinh"]);
			$node_con_moi->setAttribute("diachi",$_POST["diachi"]);
			$node_con_moi->setAttribute("dienthoai",$_POST["dienthoai"]);
			$node_goc->appendChild($node_con_moi);

			$tai_lieu->save("xml/du_lieu.xml");
			echo 
				"Thêm thành công";
		}
		?>"/>
		</td>
	</tr>
	<tr>
		
		<td colspan="2"><input type="submit"  value="Ghi"/></td>
	</tr>
</table>

</form>