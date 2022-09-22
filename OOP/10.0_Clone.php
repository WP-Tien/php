<?php 

// clone Gán một đối tượng bởi một đối tượng có sẵn và không muốn thay đổi và ảnh hưởng đến đối tượng đó

class Student{

  public $code;
  public $name;

  public function __construct($code = '1311518133', $name = 'Huu Tien') {
    $this->code = $code;
    $this->name = $name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function show_info(){
    echo '<br>';
    echo 'Code: ' . $this->code;
    echo '<br>';
    echo 'Name: ' . $this->name;
  }
}

$studentA = new Student();
echo '<pre style="color: red; font-weight: bold">';
print_r($studentA);
echo '<pre>';

// từ khóa clone
$studentB = /* clone */  $studentA; 
$studentB->setName('Nguyen Huu Tien');
echo '<pre style="color: red; font-weight: bold">';
print_r($studentB);
echo '<pre>';

echo '<pre style="color: red; font-weight: bold">';
print_r($studentA);
echo '<pre>';
?>