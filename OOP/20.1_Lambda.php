<?php 
/**
 * Anonymous functions hàm ẩn danh (hàm không có tên)
 * Trong lập trình chức năng Lambda được đánh giá khá cao, bởi vì:
 * -Truyền như một tham số vào hàm khác
 * -Được gán cho biến
 * -Được tạo và sử dụng trong thời gian thực thi 
 */

 // DÙng lambda đối với các hàm sử dụng 1 lần duy nhất

$hello = function($hello){
  echo '<h3 style="color:red;font-weight:bold">'. $hello .'</h3>';
};

$hello('Hello 1');

?>