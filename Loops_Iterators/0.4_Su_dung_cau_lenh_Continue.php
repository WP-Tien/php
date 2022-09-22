<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Using the continue statement</title>
</head>
<body>
<h1>Using the continue statement</h1>
<?php 
	for($value = -2; $value <= 2; $value ++){
		if($value == 0){
			continue;
		}
			echo "1/$value = ", 1/$value, "</br>";
	}

?>
</br>
<?php 
	for ($i = -2; $i < 6; $i ++)
	{
		if($i == 1)
		{
			echo " </br>Sẽ bỏ giá trị 1" ;
			continue;
		}
		echo "</br>". $i ;
	}

?>

</br>


<!-- if():
elseif():
else:
endif;

for():
endfor; -->

 <!-- Một số cú pháp khác  -->
 <?php 
$value =10;
if ($value==1):
	echo "\$value holds 1";
elseif ($value==10):
	echo "\$value holds 10";
else:
	echo "\$value does not hold 1 or 10";
endif;

  ?>

</br>
</br>
  <?php 
  for($loop_counter = 0; $loop_counter < 5; $loop_counter++):
  	echo "I'm going to do this five times.</br>";
  endfor;

   ?>
</body>
</html>