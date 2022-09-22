<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Các kiểu dữ liệu trong PHP</title>
</head>
<body>
	<h3>Các kiểu dữ liệu trong PHP</h3>
	<pre style="font-weight: bold; font-size:14px">
	4 kiểu vô hướng
	+ boolean 
		- $bool = true; //true
		- $bool2 = false; // false	
	+ integer kiểu số nguyên
		- $decimal = 367;
		- $negative = -214;
		- $octa = 0152; // bát phân
		- $hexa = 0x25; // thập lục phân
	+ float kiểu số thực
		- $f1 = 3.14
		- $f2 = 1.5e3;
		- $f3 = 2E-10;
	+ string chuỗi
		- $str = "Chào các bạn";

	2 kiểu phức tạp
	+ array
		- $arr = array("Nam", "Đạt", "Kiên");
		- $arr = array(
					"name" => "Nam",
					"age" => 25,
					"address" => "HCM"
					);
		- $arr = [2,5,5];
		- $arr = [
				"name" => "Tiến",
				"age" => "22",
				"phone" => ["01207768350", "113"]
				];
	+ object
		- class Person
		{
			function walk(){
			echo "walking ...";
			}
		}

		$man = new Person;
		$man->walk();

	2 kiểu đặc biệt
	+ resource // tham chiếu tài nguyên bên ngoài
	+ null 
		- $var = NULL;

	</pre>


	<?php 
	$arr = [
			"name" => "Tiến",
			"age" => "22",
			"phone" => ["01207768350", "113"]
			];

	echo "<pre>", print_r($arr) ,"</pre>";
	
	$bool = true; // boolean
	$str = "hey"; // string
	$str2 = "xin chào"; // string
	$number = 9; // integer

	echo gettype($bool); // in ra màn hình: boolean
	echo gettype($str); // in ra màn hình:  string

	//



	?>
</body>
</html>