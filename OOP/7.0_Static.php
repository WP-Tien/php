<?php 
// Thay vì truy cập thuộc tính, phương thức qua đối tượng ta truy cập qua class -> static
class Student {

  static public $code = '1311518133';
  static private $name = 'Nguyen Huu Tien';
  static protected $birthday = '12/05/1995';

  static public function show_info(){
    echo 'Public: '. Student::$code;
    echo '<br>';
    echo 'Private: '. Student::$name;
    echo '<br>';
    echo 'Protected: '. Student::$birthday;
  }
}

Student::show_info();

?>