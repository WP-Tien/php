<?php 

// Self đại diện lớp hiện tại, thường được dùng gọi đến biến số có khóa static hay hàm nào đó trong lớp hiện tại.
// Chỉ được dùng để truy cập các thuộc tính có khóa static

class Student {
  static public $code = '13311518133';
 
  public function show_info(){
    echo 'Code: ' . self::$code;
  }
}

$student = new Student();
$student->show_info();

?>