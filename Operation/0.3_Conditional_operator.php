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

  $result = ($a > $b) ? $a : $b;
  echo $result;

  echo "<br>";

  $result = ($a < $b) ? $a : $b;
  echo $result;

  ?>
</body>
</html>