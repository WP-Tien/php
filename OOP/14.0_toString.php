<?php 

class Student{

  public $code;
  public $name;
  public $birthday;

  public function __construct($code = '1311518133', $name = 'Peter Brown', $birthday = '12/22/1995'){
    $this->code = $code;
    $this->name = $name;
    $this->birthday = $birthday;
  }

  public function __toString(){
    $xhtml = 'Name: ' . $this->name;
    $xhtml .= '<br> Code: ' . $this->code; 
    $xhtml .= '<br> Birthday: ' . $this->birthday;
    return $xhtml;
  }
}

// Nếu muốn echo 1 object ra chuỗi sử dụng function __toString 
// return giá trị muốn trả về của object đó
$student = new Student();

echo $student;

echo '<pre style="color: red, font-weight: bold">';
print_r($student);
echo '</pre>';

?>