<?php 

class Student{

  private $country;
  protected $name;

  public function __construct($country = 'American', $name = 'Peter Brown'){
    $this->country = $country;
    $this->name =  $name;
  }

  // để truy cập được ở ngoài class tới thuộc tính private, protected hoặc customize lại kết quả hiển thị ra
  public function __get($property){
    $result = strtoupper($this->$property);
    return $result;
  }

  // để truyền tham số ngoài class tới thuộc tính private và protected
  public function __set($propertyName, $propertyValue){
    $this->$propertyName = $propertyValue;
  }

}

$student = new Student();
$student->country = "Betonamu";

echo $student->name;
echo "<br>";
echo $student->country;

echo '<pre style="color: red; font-weight: bold;">';
print_r($student);
echo '</pre>';

?>