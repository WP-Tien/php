<?php 
  // Abstract Class (Lớp trừu tượng) là một Class dùng để định nghĩa các thuộc tính và phương thức cho các class khác. 
  // Abstract Class không cho phép khởi tạo đối tượng từ class đó.
  // Abstract method không cho phép định nghĩa rõ cách hoạt động của method, chỉ dừng lại khai báo method 
  // Từ khóa Abstract được dùng để định nghĩa một lớp trừu tượng.

abstract class Person {

  private $name;
  private $birthday;

  // phương thức public, protected 
  // Nếu dùng private khõi dùng ở class con
  abstract public function show_info(array $param);  
}

abstract class Chill {

  abstract public function show(array $param);
}

// 1 class con chi dc ke thua 1 class abstract
class Student extends Person {

  public function show_info(array $param){
    echo '<h3 style="color:red; font-weight: bold">' . __METHOD__ . '</h3>';
  }
}

class Teacher extends Person {

  public function show_info(array $param){
    echo '<h3 style="color:red; font-weight: bold">' . __METHOD__ . '</h3>';
  }  
}

$student = new Student();
$student->show_info(['']);

$teacher = new Teacher();
$teacher->show_info(['']);

echo '<pre style="color: red; font-weight: bold">';
print_r($student);
echo '</pre>';

?>