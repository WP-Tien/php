<?php 

$num = 12;

// if statement 
if ( /* condition */ $num < 100 ) {
  echo "$num is less then 100";
}

echo "<br>" . "<hr>";

// if -- else  statement 
if ($num % 2 == 0) {
  echo "$num is even number";
} else {
  echo "$num is odd number";
}

echo "<br>" . "<hr>";

// if -- elseif -- else statement 

if ($num >= 0 && $num % 2 == 0) {
  echo "$num is even positive integer";
} elseif ($num >= 0 && $num % 2 == 1) {
  echo "$num is odd positive integer";
} elseif ($num <= 0 && $num %2 == 0) {
  echo "$num is even negative integer";
} else {
  echo "$num is odd negative integer";
}






?>