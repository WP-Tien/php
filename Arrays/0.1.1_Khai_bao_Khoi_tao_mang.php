<meta charset="utf-8"/>
<?php
	$mang = array(10);
	$mang_1 = array(1,2,3,4,5); // không tạo giá trị cho khóa 
	$mang_2 = array(1=> "Một", 2=> "Hai", 3=> "Ba", 4=> "Bốn", 5=> "Năm"); // Giá trị của khóa có kiểu số
	$mang_3 = array("mot" => 1, "hai"=> 2, "ba"=> 3, "bon"=> 4,"nam"=> 5); // Giá trị của khóa có kiểu chuỗi
	echo "<pre>", print_r($mang) ,"</pre>";
	echo "<pre>", print_r($mang_1) ,"</pre>";
	echo "<pre>", print_r($mang_2) ,"</pre>";
	echo "<pre>", print_r($mang_3) ,"</pre>";

	echo $mang_2[2];

?>