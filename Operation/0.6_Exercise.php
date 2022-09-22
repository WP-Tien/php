<meta charset="utf-8"/>
<?php 
	$x = 2;
	// $y  = $x + 2;
	$y = "4";
	echo $y;
	echo "<br />";
	// echo (x != y);
	echo "</br>";
	echo (x === y);

	$a = 15;
	$b = $a % 2;
	echo "<br/>" . $b;

	$j = 10;
	echo "<br/>" . -$j;

	$h = 10;
	$h *= 5;
	$h ++;
	echo "<br/>" . $h;

	$k = 10;
	$o = $k++;
	echo "<br/>K:" .$k."<br/>";
	echo "O:" .$o;

	$u = 10;
	$i = ++$u;
	echo "<br/>U:" .$u."<br/>";
	echo "I:" .$i;

	echo "<br/>";

	$variable = "Welcome to PHP";
	$result = (is_string($variable)) ? "Chuỗi": "Không phải là chuỗi" ;
	echo $result ;

	echo "<br/>";

	$n =  -2;

	$result1 = ($n > 0 ) ? "Số nguyên dương" : (($n < 0) ? "Số nguyên âm" : "Số 0");
	echo $result1;
?>