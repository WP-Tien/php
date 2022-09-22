<?php 

class Student{

  public $code;
  public $name;
  public $birthday;

  public function __construct($code = '1311518133', $name = 'Nguyen Huu Tien', $birthday = '03/08/1995'){
    $this->code = $code;
    $this->name = $name;
    $this->birthday = $birthday;
  }

  // phương thức sleep can thiệp vào serialize
  public function __sleep(){
    return array('code', 'name');
  }

  // phương thức wakeup can thiệp vào unserialize
  public function __wakeup(){
    $this->name = "NHT";
    $this->birthday = "03/08/1995";
  }

}

$student = new Student();
echo '<pre style="color: red; font-weight: bold">';
print_r($student);
echo '</pre>';

// object -> string
echo $string = serialize($student);

// string ->object
$object = unserialize($string);
echo '<pre style="color: red; font-weight: bold">';
print_r($object);
echo '</pre>';
?>