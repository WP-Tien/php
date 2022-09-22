<?php 

  /**
   * Closure 
   * Closure tương tự như Lambda, ngoài ra nó có thể truy cập các biến bên ngoài phạm vi của nó.
   */

   $name = 'John Smith';
   $birthday = '23/02/1989';

  // Case 01
  //  $showHello = function () use ($name, $birthday){
  //    echo 'My name is'. $name .'and my birthday is on '. $birthday ;
  //  };

  // Case 02 
  // & kiểu tham chiếu
  $showHello = function () use (&$name){
    $name = strtoupper($name);
    echo 'My name is '. $name;
  };
   
  $showHello();
  echo $name;

?>