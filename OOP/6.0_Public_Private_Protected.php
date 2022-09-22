<?php 
class Student {

  public $code = "1311518133";
  public $name = "Nguyễn Hữu Tiến";
  public $birthday = "03/08/1995"; 
  private $private = "privated";
  protected $protected = "protected";

  public function show_info(){
    echo 'Code: '. $this->code;
    echo '<br>';
    echo 'Name: '. $this->name;
    echo '<br>';
    echo 'Birthday: '. $this->birthday;
    echo '<br>';
  }

  private function fu_private(){
    echo $this->private;
  }

  public function call_private(){
    return $this->fu_private();
  }

  protected function fu_protected(){
    echo $this->protected;
  }

  public function call_protected(){
    return $this->fu_protected();
  }
  
}  

class Teacher extends Student{
  private $private = "privated 2";

  public function call_private2(){
    return $this->fu_private2();
  }

  private function fu_private2(){
    echo $this->private;
  }

  public function access_protected_property(){
    echo $this->protected;
  }
}

/*  		    In Class         Out Class          In Children Class
Public      +                +                  +
Private     +                -                  - 
Protected   +                -                  + 
*/

// PUBLIC 
$student = new Student();
echo $student->code . "<br>";
echo $student->name . "<br>";
echo $student->birthday . "<br>";
$student->show_info(); 


$teacher = new Teacher();
echo $teacher->code . "<br>";
echo $teacher->name . "<br>";
echo $teacher->birthday . "<br>";
$teacher->show_info(); 

echo "<br>"; 
echo "<hr>";
// PRIVATE
// echo $student->private; // cant access private property
// $student->fu_private(); // call to private method 
$student->call_private(); 
echo "<br>";
$teacher->call_private2();

echo "<br>"; 
echo "<hr>";
// PROTECTED
// echo $student->protected . "<br>"; // cant access protected property
// $student->fu_protected(); // call to protected method
$student->call_protected();
echo "<br>";
$teacher->call_protected();
echo "<br>";
$teacher->access_protected_property(); 

?>