<?php 
	echo '<h3>1/ Dạng dùng cặp dấu /../ để bắt đầu và kết thúc chuổi định dạng</h3>';
	if( preg_match("/PHP/", "cách dùng preg_match trong lập trình php.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo '<h3>2/ Để chỉ định không phân biệt chữ hoa hay chữ thường ta dùng kí hiệu i.</h3>';	
	if( preg_match("/PHP/i", "cách dùng hàm preg_match trong lập trình php.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo '<h3>3/ Dấu ^ để quy định chuổi định dạng nằm ở vị trí đầu tiên của chuổi mẹ.</h3>';
	if( preg_match("/^PHP/i", "cách dùng hàm preg_match trong lập trình php.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo '<h3>4/ Dấu $ quy định chuổi định dạng nằm ở vị trí cuối cùng của chuổi mẹ</h3>';
	if( preg_match("/PHP$/i", "cách dùng hàm preg_match trong lập trình php") ){
		echo "Đã tìm thấy ký tự cần tìm";
	} else {
		echo "Không tìm thấy ký tự cần tìm";
	}

	echo '<h3>5/ Dấu \s để qui định khoảng trắng</h3>';
	if( preg_match("/PHP(\s)tốt/i", "cách dùng hàm preg_match trong lập trình php tốt.") ){
		echo "Đã tìm thấy ký tự cần tìm";
	} else {
		echo "Không tìm thấy ký tự cần tìm";
	}

	echo "<h3>6/ Dấu ? để quy định: không tồn tại, hoặc nếu tồn tại thì chỉ có 1 thôi</h3>";
	if( preg_match("/PHP(\s)?tốt/i", "cách dùng hàm preg_match trong lập trình php tốt.") ){
		echo "Đã tìm thấy ký tự cần tìm";
	} else {

	}

	echo "<h3>7/ Dấu * để quy định: không tồn tại, hoặc nếu có thì có thể có nhiều</h3>";
	if( preg_match("/PHP(\s)*tốt/i", "cách dùng hàm preg_match trong lập trình php       tốt") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo "<h3>8/ Dấu + để quy định: phải tồn tại từ 1 trở lên</h3>";
	if( preg_match("/PHP(\s)+tốt/i", "Tự học lập trình php tốt nhất và cách dùng hàm preg_match trong lập trình phptốt" ) ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	if( preg_match("/[_,]php/i","_PHP cách dùng hàm preg_match trong lập trình php.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo "<h3>10/ A-Z, a-z, A-z quy định một kí tự viết hoa, viết thường, tất cả. Phải đi kèm với dấu [] </h3>";
	if( preg_match("/[a-z]php/i", "xyzPHP cách dùng hàm preg_match trong lập trình php.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}

	echo "<h3>11/ 0-9 qui định một kí số</h3>";
	if( preg_match("/[0-9]php/i"," cách dùng hàm preg_match trong lập trình 99php.") ) {
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm";
	}

	echo "<h3>12/ [A-z0-9]: một kí tự hoặc mốt kí số </h3>";
	if( preg_match("/[A-z0-9]php/i", "PHP và cách dùng hàm preg_match.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm";
	}

	echo "<h3>13/ {} qui định số lượng</h3>";
	if( preg_match("/[a-z]{4,5}php/i", "PHP và cách dùng hàm preg_match.") ){
		echo "Đã tìm thấy ký tự cần tìm.";
	} else {
		echo "Không tìm thấy ký tự cần tìm.";
	}
?>