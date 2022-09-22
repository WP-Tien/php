<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sắp xếp mảng liên hợp</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$array = array("Hoang"=>"31", "Nam"=>"41", "Minh"=>"39", "Hoa"=>"40");
		
		echo "1. Sắp xếp tăng dần theo Value<br>";
		asort($array);
		foreach ($array as $key=>$value) {
			echo "Tuổi của ".$key." là: ". $value."<br>";
		}


		echo "2. Sắp xếp tăng dần theo Key<br>";
		ksort($array);
		foreach ($array as $key=>$value) {
			echo "Tuổi của ".$key." là: ". $value."<br>";
		}

		echo "3. Sắp xếp giảm dần theo Value<br>";
		arsort($array);
		foreach ($array as $key=>$value) {
			echo "Tuổi của ".$key." là: ". $value."<br>";
		}
	
		echo "4. Sắp xếp giảm dần theo Key<br>";
		krsort($array);
		foreach ($array as $key=>$value) {
			echo "Tuổi của ".$key." là: ". $value."<br>";
		}
	

	?>
</body>
</html>