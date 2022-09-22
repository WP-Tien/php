<?php
	$mang = array(1,2,3,4,5,6,7);
	array_push($mang, 8,9,10,"20abc","abc10","ab","ab10ab");
	
	// Loại bỏ or lấy ra thông qua array_pop
	array_pop($mang);

	//unset($mang[5]);

	echo "<pre>",print_r($mang),"</pre>";

	echo array_sum($mang);
?>