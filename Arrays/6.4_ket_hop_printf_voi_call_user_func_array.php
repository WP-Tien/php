<?php 
function printf_array( $format, $arr ){
	// call_user_func_array gọi tới hàm printf có sẵn. 
	// Tham số thứ 2 là mảng nên dùng array_merge.
	return call_user_func_array('printf', array_merge( (array)$format, $arr ) );
}

$goodevil = array( 'good', 'evil' );

printf_array( 'There is a difference between %s and %s', $goodevil );

?>