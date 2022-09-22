<?php 
// __construct() Phương thức được gọi tự động và được gọi đầu tiên khi một object được khởi tạo.-> Dùng khởi tạo các giá trị ban đầu.
// __destruct() Phương thức được gọi tự động và được thực thi ở cuối trang. 
// Đóng kết nối cơ sở dữ liệu và hủy các session.
  require_once 'class/Student_class.php';

  // $student = new Student("newCode", "Huu Tien", "03/08/95");
  $array = array('code' => "1311518133",'name' => "Nguyen Huu Tien", 'birthday' => "03/08/1995");
  
  $student = new Student($array);
  echo '<pre style="color: red; font-weight: bold">';
  print_r ($student);
  echo '</pre>';
  $student->send();
?>