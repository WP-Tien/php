<?php 

  // date `D` A textual representation of the day, three letters Mon throught Sun. 
  $today = date("D");

  //echo $today;

  if ($today == "Fri") {
    echo "Have a nice weekend";
  } elseif ($today == "Sun") {
    echo "Have a nice Sunday";
  } else {
    echo "Have a nice day";
  }

?>