<?php 
require_once "Student_class.php";
class Teacher extends Student {
  
  // Override thuộc tính và phương thức của Student
  public function show_info(){
    $this->code = "New code";

    echo "Code: $this->code";
    echo "<br>";
    echo "Name: $this->name";
    echo "<br>";
    echo "Birthday: $this->birthday";
  }
}

?>