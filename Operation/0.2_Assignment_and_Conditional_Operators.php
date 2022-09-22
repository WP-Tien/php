<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php 
    $a = 50;
    $b = 30;
    $c = $a + $b;
    echo "addition result $c <br>";

    $c += $a;
    echo "add assigment operation: $c <br>";

    $c -= $a;
    echo "Subtraction $c <br>";

    $c *= $a;
    echo "Multiplication $c <br>";
    
    $c /= $a;
    echo "Divided $c <br>";

    $c %= $a;
    echo "modulus $c <br>";
  ?>
</body>
</html>