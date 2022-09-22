<?php
	$mang = array(2,3,5,9,3,2,5,6,1,4,8,5,11);
	
	function hoan_vi(&$a,&$b)
	{
		$doi = $a;
		$a = $b;
		$b = $doi;
	}
	
	for ($i = 0 ; $i < count($mang) ; $i ++)
	{
		for($j = $i + 1 ; $j < count($mang) ; $j ++ )
		{
			if($mang[$i] > $mang[$j])
			{
				hoan_vi($mang[$i],$mang[$j]);
			}

		}
	}
	echo "<pre>",print_r($mang),"<pre>";
?>