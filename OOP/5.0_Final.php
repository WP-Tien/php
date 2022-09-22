<?php 

// Final 
// Method lop81 con không thể override các phương thức ở lớp cha nếu các phương thức ở lớp cha có từ khóa Final.
// Class khi chúng ta dùng từ khóa final thì chúng ta không thể extends class đó.

/* final */ class Person{

  public $code;
  public $name;
  public $birthday;

  public function __construct($code = '13318133', $name = 'Huu Tien', $birthday = '03.08/1995'){
    $this->code = $code;
    $this->name = $name;
    $this->birthday = $birthday;
  }

  /* final */ public function show_info(){
    echo '</br>- Code: '. $this->code;
    echo '</br>- Name: '. $this->name;
    echo '</br>- Birthday: '. $this->birthday;
  }
}

class Student extends Person {
  public $year = 3;

  public function show_info(){
    echo '<br>- Code: '. $this->code;
    echo '<br>- Name: '. $this->name;
    echo '<br>- Birthday: '. $this->birthday;
    echo '<br>- Year: '. $this->year;
  }
}

$student = new Student();
$student->show_info();

?>