<!DOCTYPE html>
<html>
  <head>
    <title> </title>
  </head>
  <body>
  <?php 
    echo "<h3>Arithmetic Operators</h3><br>";

    $a = 20;
    $b = 40;
    $c = $a + $b;
    echo "addition operation result: $c <br>";
    
    $c = $a - $b;
    echo "subtraction operation result: $c<br>";

    $c = $a * $b;
    echo "multipication operation result: $c<br>";

    $c = $a / $b;
    echo "division operation result: $c<br>";

    $c = $a % $b;
    echo "modulus result: $c<br>";

    $c = $a++;
    echo "increment operator result: $c <br>";

    $c = $a--;
    echo "decreament operator result: $c <br>";


    echo "5 + 2 = ", 5+2, "</br>";
		echo "5 - 2 = ", 5-2, "</br>";
		echo "5 * 2 = ", 5*2, "</br>";
		echo "5 / 2 = ", 5/2, "</br>";
		echo "5 % 2 = ", 5%2, "</br>";

		echo "sqrt (49) =", sqrt(49), "</br>";

		$a = $b = $c = 1;
		echo $a, ",", $b ,",", $c, "</br>";

		// toán tử ghép nối
		$my_CD_collection = $my_CD_collection = 10;
		$my_CD_collection += 10; 
		echo "My CD colection : ", $my_CD_collection, "</br>";

		$text = "No";
		$total = 150;

		echo $text .= " worries.</br>";
		echo "Average = ", $total /=3, "</br>";
  ?>
  </body>
</html>