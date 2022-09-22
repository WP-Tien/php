<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hợp hai mảng trong PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
        $array1 = array(
        	array(12, 37), 
        	array(21, 35)
        );  
		$array2 = array("vietjack", "team");  
		
		function ham_hop_mang_theo_index($x, $y){
			$temp = array();
			$temp[] = $x;
			if( is_scalar($y) ){
				$temp[] = $y;
			} else {
				foreach( $y as $k=>$v){
					$temp[] = $v;
				}
			}
			return $temp;
		}

		echo "<pre>";
		echo '<pre>'; print_r(array_map('ham_hop_mang_theo_index',$array2, $array1));
		echo "</pre>";

	?>
</body>
</html>

<!-- Scalar variables are those containing an integer, float, string or boolean. Types array, object and resource are not scalar. -->