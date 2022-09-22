<!DOCTYPE html>
<html>
<head>
	<title>The string operators</title>
</head>
<body>
<h1>The string operators</h1>
<?php 
$a = "No ";
echo "\$a = ", $a, "</br>";
echo "\$b = \$a . \" problem \"</br>";
$b = $a. "problem";
echo "Now \$b = ", $b, "</br>";
echo "\$b .=\" at  all. \" </br>";
$b  .= " at all.";
echo "Now \$b = ", $b ,"</br>";


 ?>
</body>
</html>