<!DOCTYPE html>
<html>
<head>
	<title>Using the while loop</title>
</head>
<body>
<h1>Using the while loop</h1>
<?php 
$value = 1;
while ($value <10){
	echo "New value:", $value,"</br>";
	$value *=2;
}
 ?>
<br>
<?php 
$value = 1;
do{
	echo $value, "</br>";
	$value *= 2;
}while ($value < 10);
?>
<br>	
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>
</body>
</html>