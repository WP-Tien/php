<?php
	$tai_lieu = new DOMDocument();
	$tai_lieu->load("xml/hoc_vien.xml");
	$node_goc = $tai_lieu->documentElement;
	$mang_node_con = $node_goc->childNodes;
?>
<meta charset="utf-8" />
<form>
	<?php
	foreach($mang_node_con as $node_con)
	{
		if($node_con->nodeType == XML_ELEMENT_NODE)
		{
		?>
		<table border="1">
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" name="ho_ten" value="<?php echo $node_con->getAttribute('ho_ten'); ?>" /></td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td><input type="text" name="ngay_sinh" value="<?php echo $node_con->getAttribute('ngay_sinh'); ?>" /></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><input type="text" name="dia_chi" value="<?php echo $node_con->getAttribute('dia_chi'); ?>" /></td>
			</tr>
			<tr>
				<td>Điện thoại:</td>
				<td><input type="text" name="dien_thoai" value="<?php echo $node_con->getAttribute('so_dien_thoai'); ?>" /></td>
			</tr>
		</table>
		<?php
		}
	}
	?>
</form>