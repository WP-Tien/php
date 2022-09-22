<?php 

Class Cars {

  function greeting(){
  }

  function secondFunction(){
    
  }

}

// get_class_methods -- Gets the class method's name.
$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
  echo $method . "<br>";
}

?>