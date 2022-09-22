<?php 
/**
 * Khi tao ra một anonymous function trong class 
 */
class Student {

  private $name;
  private $birthday;

  public function __construct(){
    $this->name = 'John Smith';
    $this->birthday = '23/03/1989';
  }

  public function show_info($greeting){
    $output = function () use ($greeting){ 
      echo "{$greeting}, My name is {$this->name}, my birthday is on {$this->birthday}";
     };
    return $output();
  }

  public function show_hello($greeting) {
    // gắn từ khóa static function hoạt động nhanh hơn. ít chiếm bộ nhớ vì nó ko truy cập đến đối tượng student.
    $result = static function () use($greeting) {
      echo "{$greeting} ";
    }; 
    return $result();
  }

  public function __invoke(){
    echo '<h3 style="color:red; font-weight:bold">'. __METHOD__ . '</h3>';
  }
}

$student = new Student();
echo '<pre style="color: red; font-weight: bold;">';
print_r($student);
echo '</pre>';

$student->show_info("Hello");
$student->show_hello("Hello");

// student là một đối tượng khai báo như 1 lambda
// trong class của đối tượng đó khai báo hàm __invoke();
$student();

?>