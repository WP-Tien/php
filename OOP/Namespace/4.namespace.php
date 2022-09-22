<?php 

  require_once 'Magento/Lib/Student.php';
  require_once 'Zend/Obj/Student.php';

  $studentZend = new Zend\Obj\Student;
  $studentMagento = new Magento\Lib\Student;


  echo '<pre style="color:red; font-weight: bold">';
  print_r($studentZend);
  echo '</pre>';

  echo '<pre style="color:red; font-weight: bold">';
  print_r($studentMagento);
  echo '</pre>';
  
?>