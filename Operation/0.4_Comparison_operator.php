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

    $x = 25;
    $y = 45;
    $z = "25";

    echo "<pre>";

    var_dump($x == $y);
    var_dump($x === $z);
    var_dump($x != $y);
    var_dump($x !== $z);
    var_dump($x < $y);
    var_dump($x > $y);
    var_dump($x <= $y);
    var_dump($x >= $y);

    echo "</pre>";

  ?>
</body>
</html>