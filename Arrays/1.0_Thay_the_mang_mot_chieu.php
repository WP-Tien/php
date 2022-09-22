<?php
function thay_the($mang, $gt_cu, $gt_moi)
{
	$n = count($mang);
	for($i = 0; $i < $n; $i++)
	{
		if($mang[$i] == $gt_cu)
		{
			$mang[$i] = $gt_moi;
		}
	}
	return $mang;	
}


$mang = array(2,1,2,3,4,5,6,7,8);
$gt_cu = 2;
$gt_moi = 1;

echo "<pre>", print_r($mang) ,"</pre>";
echo "<pre>", print_r(thay_the($mang, $gt_cu, $gt_moi)) ,"</pre>";

?>