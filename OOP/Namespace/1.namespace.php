<?php 

/**
 * Tránh xung đột với tên lớp, tên hàm và tên hằng số giữa các tập tin khác nhau.
 * Làm cho mã nguồn ngắn gọn và dễ đọc hơn.
 * 
 * - Namespaces đơn.
 * - Namespaces phân cấp.
 * - Multi namespace.
 * 
 * Sử dụng hằng số __NAMESPACE__
 * Truy xuất class, function, constant khi sử dụng namespace.
 * Sử dụng từ khóa use đặt alias cho namespace.
 *  
 */

 /**
  * ! Dưới đây là cách gọi thông thường 
  */ 
  
  require_once 'Zend/Obj/Student.php';
  require_once 'Magento/Lib/Student.php';

  $student = new Magento_Lib_Student();

  echo '<pre style="color:red; font-weight: bold">';
  print_r($student);
  echo '</pre>';
?>