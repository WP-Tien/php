<?php 

  namespace Test;
  // use Zend\Obj\Student;

  require_once 'Zend/Obj/Student.php';

  class Teacher {
    public $student;

    public function __construct()
    {
      /**
       * Namespace `Test` sẽ tự động nối với Test\Zend\Obj\Student
       * Để tránh điều đó xảy ra, ta thêm đấu \ : \Zend\Obj\Student 
      */
      $this->student = new \Zend\Obj\Student();

      // Nếu dùng dòng use bên trên thì ko cần lo !
      // $this->student = new Student();
    }
  }

  $teacher = new Teacher();
  echo '<pre style="color:red; font-weight: bold">';
  print_r($teacher);
  echo "</pre>";

?>