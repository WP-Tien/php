<?php 
  /**
   * Lambda là một hàm ẩn danh (hàm không có tên), chỉ đơn giản là các hàm sử dụng một lần, có thể được định nghĩa vào bất cứ lúc nào, và thường được gắn với một biến.
   * Closure tương tự như Lambda, ngoài ra nó có thể truy cập các biến bên ngoài phạm vi của nó.
   */

// variable - variable là gì >?
// Gọi phương thức, thuộc tính 
// Chưa xác định được tên của phương thức đó trước khi thực thi

$x = 'y';
$$x = 'z'; // $y = z;

echo $x . '<br />';
echo $$x . '<br />';
echo $y . '<br />';

function showHello(){
  echo '<h3 style="color:red; font-weight:bold">Hello!</h3>';
}

$function = 'showHello';
$function();

class Student {

  public function showInfo(){
    echo '<h3 style="color:red; font-weight:bold">'. __METHOD__ . '</h3>';
  }

}

$class = 'Student';
$method = 'showInfo';

$student = new $class();
$student->$method();

echo '<pre style="color:red; font-weight:bold;">';
print_r($student);
echo '</pre>';


?>