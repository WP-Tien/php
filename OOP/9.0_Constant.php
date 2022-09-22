<?php 
// const định nghĩa các từ khóa có giá trị không thay đổi sử dùng từ khóa const 
// Để truy cập vào lấy giá trị ta sử dụng từ khóa ::

// * phân  biệt giữa const, static and variable
class Person {

  public $sex = "female"; 
  const sex = "male";
  const name = "Tien";

  public function call_const(){
    echo "<br>";
    echo 'Sex: ' . Person::sex;
    echo "<br>";
    echo 'Sex: ' . $this::sex;
    echo "<br>";
    echo 'Sex: ' . self::sex;
  }

}

$person = new Person();
echo 'Sex: ' . $person->sex;
echo "<br>";
// Có hai cách để gọi const  
// 1. thông qua class 
// 2. thông qua object  
echo 'Sex: ' . Person::sex;
echo "<br>";
echo 'Sex: ' . $person::sex;
$person->call_const();

// inspect 
echo '<pre sytle="color: corlor; font-weight:bold">';
print_r($person);
echo '</pre>';

?>