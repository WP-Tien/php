<?php 
echo "<h3>Using the if statement</h3>";

$test_score = 78;
if($test_score > 90) {
  echo "You got an A!";
} elseif ($test_score > 80) {
  echo "You got a B!";
} elseif ($test_score > 70) {
  echo "You got a C!";
} elseif ($test_score > 60) {
  echo "You got a D!";
} else {
  echo "Uh oh";
}

?>