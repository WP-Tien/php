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

    $year = 2018;

    if( ( $year % 400 == 0 )  || ( $year % 100 != 0 ) && ( $year % 4 == 0) ) {
      echo "$year is a leap year.";
    } else {
      echo "$year is not leap year.";
    }

  ?>
</body>
</html>