<?php 
/**
  * SINGLETON 
  * - Đảm bảo chỉ duy nhất một thực thể  obj của một class được tạo ra.
  * - Khi cần tạo ra một class mà class đó chỉ có một đối tượng duy nhất và có thể truy cập đến đối tượng đó ở bất kỳ nơi đâu.
  * -- class db, cấu hình ... 
  */

class Database {

  public function _construct(){
    echo '<h3 style="color: red; font-weight: bold;">'. __METHOD__ . '</h3>';
  }
}

// Xem obj đó khởi tạo lần thứ bao nhiu 
$db = new Database();
$db1 = new Database();
$db2 = new Database();
$db3 = new Database();

echo '<pre style="color: red; font-weight: bold">';
var_dump($db3);
echo '<pre>';

?>