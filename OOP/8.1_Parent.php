<?php 
// Parent đại diện cho lớp cha, thường được sử dụng để gọi biến số có khóa static hay hàm nào đó trong lớp cha.
class Person {

  public $code;
  public $name;
  public $birthday;
  static public $salary = 10000;

  public function __construct($code = '1311518133', $name = 'Nguyen Huu Tien', $birthday = '12/05/1995') {
    $this->code = $code;
    $this->name = $name;
    $this->birthday = $birthday;
  }

  public function show_info(){
    echo 'Code: ' . $this->code;
    echo '<br>';
    echo 'Name: ' . $this->name;
    echo '<br>';
    echo 'Birthday: ' . $this->birthday;
  }
}

class Student extends Person {

  public $year = 3;

  public function show_info(){
    parent::show_info();
    echo '<br>';
    echo 'Year: ' . $this->year;
    echo '<br>';
    echo 'Salary: ' . parent::$salary;
  }


}

$student = new Student();
$student->show_info();

?>