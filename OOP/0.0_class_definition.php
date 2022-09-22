<?php 
  Class Iamhere {

  }

  // get_declared_classes -- Returns an array with the name of the defined classes.
  $classes = get_declared_classes();

  foreach ($classes as $class) {
    echo $class . "<br>";
  }
  
?>