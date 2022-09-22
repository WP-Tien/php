<meta charset="utf-8" />
<?php

	/**
	 * fopen - Opens file or URL 
	 * ! http://php.net/manual/en/function.fopen.php
	 */

	$file = fopen("filetoopen.txt","r") or exit ("Không mở được file!");
	
	/**
	 * feof() Kiểm tra xem con trỏ tập tin đã ở vị trí cuối cùng của file chưa.
	 * @param file là tham số $file (đã mỡ thành công bằng fopen() hoặc fsockopen() ).
	 */
	while(!feof($file))
	{
		// sẽ đọc và lấy dữ liệu dòng hiện tại của con trỏ tệp tin.
		// 
		echo fgets($file) . "<br/>";
	}
	fclose($file);
?>