<html>
	<head>
		Tạo mảng liên hợp trong PHP			
	</head>
	<body>
		<?php 
			$mang_lien_hop = array("Italy"=>"Rome", "Luxembourg"=>"Luxembour", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France"=>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany"=>"Berlin", "Greece"=>"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Austria"=>"Vienna", "Poland"=>"Warsaw");

			// Sắp xếp mảng liên hợp
			// sort() sort arrays is ascending order
			// rsort() sort arrays in descending order
			// asort() sort associative arrays in ascendingg order, according to the value
			// ksort() sort associative arrays in ascending order, according to the key
			// arsoirt() sort associative arrays in descending order, according to the value
			// krsort() sort associative arrays in descending order, according to the key
			asort($mang_lien_hop);

			//lặp qua các phần tử mảng
			foreach($mang_lien_hop as $country=>$capital){
				echo "Thủ đô của $country là $capital". "<br>";
			}
		?>
	</body>
</html>