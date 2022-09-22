<?php 
  require_once 'class/Student_class.php';

  $student = new Student();
  $student->setCode('1311518133'); 
  $student->setName('Nguyen Huu Tien');

  echo '<pre style="color:red; font-weight:bold">';
  print_r ($student); 
  echo '</pre>';
?>