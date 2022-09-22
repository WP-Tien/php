<meta charset="utf-8" />
<?php 
	$firstName = "John";
	$lastName = "Smith";
	// Nối chuỗi trong PHP bằng dấu chấm [.]
	// $fullName = $firstName . $lastName;
	$fullName = $firstName . " " . $lastName;
	// echo $firstName;
	// echo $lastName;
	echo $fullName;

	echo "<br/>";
	$number = 12.34;
	// echo (int)$number;
	settype($number, "integer");
	echo $number;

	var_dump($firstName);
	echo gettype($number);
	echo "<br/>";
	echo gettype($fullName);

	echo "<br/>";
	echo is_numeric(12);
	echo is_numeric("ABC");

	echo "<br/>";
	define("PI", 3.14);
	define("TEN", "Tiến");
	echo "Value PI:" .PI;
	echo "<br/>";
	echo "Chào mừng" ." ". TEN ." ". "đến với PHP.";

?>