<meta charset="utf-8" />
<?php
$tai_lieu = new DOMDocument();
$tai_lieu->load("xml/du_lieu.xml");
$node_goc = $tai_lieu->documentElement;
//$mang_node_con = $node_goc->childNodes;

/*foreach($mang_node_con as $node_con)
{
	if($node_con->nodeType == XML_ELEMENT_NODE)
	{
		echo $node_con->getAttribute("ma_nv") . " - " . $node_con->nodeValue."<br/>";
	}
}*/

$node_con_moi = $tai_lieu->createElement("nhan_vien");
$node_con_moi->setAttribute("ma_nv","0004");
$node_con_moi->nodeValue = "Tiến Nguyễn";
$node_goc->appendChild($node_con_moi);

$tai_lieu->save("xml/du_lieu.xml");

?>