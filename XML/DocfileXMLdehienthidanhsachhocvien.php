<?php 
	$tai_lieu = new DOMDocument();
	$tai_lieu->load("xml/hoc_vien.xml");
	$node_goc = $tai_lieu->documentElement;
	$mang_node_con = $node_goc->childNodes;
?>
<meta charset="utf-8" />
<form>

			<table style="border-collapse: collapse">
				<tr>
					<th>Họ tên</th>
					<th>Ngày sinh</th>
					<th>Địa chỉ</th>
					<th>Điện thoại</th>
				</tr>
					<?php
					foreach($mang_node_con as $node_con)
					{
						if($node_con->nodeType == XML_ELEMENT_NODE)
						{
					?>
				<tr>
					<td><input type="text" name="ho_ten" value="<?php echo $node_con->getAttribute('ho_ten'); ?>" /></td>
					<td><input type="text" name="ngay_sinh" value="<?php echo $node_con->getAttribute('ngay_sinh'); ?>" /></td>
					<td><input type="text" name="dia_chi" value="<?php echo $node_con->getAttribute('dia_chi'); ?>" /></td>
					<td><input type="text" name="so_dien_thoai" value="<?php echo $node_con->getAttribute('so_dien_thoai'); ?>" /></td>
				</tr>
					<?php
						}
					}
					?>
			</table>

</form>