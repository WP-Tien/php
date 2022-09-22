<?php 
  echo "<h3>Using the if statement</h3>";

  $minutes = 4;
  if($minutes > 3){
    echo "Your time is up ! </br>";
    echo "Please put your phone down";
    $hang_up_now = TRUE;
  }

   echo "<br>";  
  
  $temperature = 75;
  if ($temperature == 75) {
    echo "75 degrees today, not too bad.";
  } 

  echo "<br>";

  $temperature = 80;
  if ($temperature <> 75) {
    echo "It's not 75 degrees today.";
  }

  echo "<br>";

  $temperature = 26;
  if ($temperature > 75 && $temperature < 80) {
    echo "We're in the comfort zone";
  } else {
    echo "We're outside the comfort zone";
  }



?>