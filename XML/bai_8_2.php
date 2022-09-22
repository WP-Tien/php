<meta charset="utf-8" />
<?php
$tai_lieu = new DOMDocument();
$tai_lieu->load("du_lieu/hoc_vien.xml");
$node_goc = $tai_lieu->documentElement;
$mang_node_con = $node_goc->childNodes;


?>
<table style="width: 500px; margin: auto;">
	<tr style="background: #050; color: #fff;">
		<td>Họ tên</td>
		<td>Ngày sinh</td>
		<td>Địa chỉ</td>
		<td>Điện thoại</td>
	</tr>
<?php
foreach($mang_node_con as $node_con)
{
	if($node_con->nodeType == XML_ELEMENT_NODE)
	{
		?>
		<tr>
			<td><?php echo $node_con->getAttribute("ho_ten"); ?></td>
			<td><?php echo $node_con->getAttribute("ngay_sinh"); ?></td>
			<td><?php echo $node_con->getAttribute("dia_chi"); ?></td>
			<td><?php echo $node_con->getAttribute("dien_thoai"); ?></td>
		</tr>
		<?php
	}
}
?>
</table>