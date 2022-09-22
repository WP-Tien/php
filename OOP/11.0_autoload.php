<?php 

  // require_once "class/Student_class.php";
  // require_once "class/Teacher_class.php";

  // $student = new Student();
  // $teacher = new Teacher();

  // echo '<pre style="color: red; font-weight:bold">';
  // print_r ($student);
  // echo '</pre>';

  // echo '<pre style="color: red; font-weight:bold">';
  // print_r ($student);
  // echo '</pre>';

function __autoload($className) {
  echo $className . '<br>';
  $fileName = "class/{$className}_class.php";
  echo $fileName;
  if(file_exists($fileName) == true ) {
    require_once $fileName;
  }
  
}

$student = new Student(); // Tên của class được truyền vào phương thức autoload
$teacher = new Teacher(); // Tên của class được truyền vào phương thức autoload

echo '<pre style="color: red; font-weight:bold">';
print_r ($student);
echo '</pre>';

?>