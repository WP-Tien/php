<!DOCTYPE html>
<html>
<head>
	<title> Incrementing and Decrementing</title>
</head>
<body>
<h1>
	Incrementing and Decrementing
</h1>
<?php 
	$a = $b = $c = $d = 1;

	// tăng sau
	echo "\$a++ gives ", $a++, "</br>";
	echo $a,"</br>";
	// tăng trước
	echo "++\$b gives ", ++$b, "</br>";
	// giảm sau
	echo "\$c-- gives ", $c--, "</br>";
	// giảm trước
	echo "--\$d gives ", --$d, "</br>";

	$x = 10;
	$y = 20;
	echo "</hr>";
	//echo " ++ \$x:", ++$x . "</br>";
	echo " \$x ++:", $x++ . "</br>";
	echo $x;
?>
</body>
</html>