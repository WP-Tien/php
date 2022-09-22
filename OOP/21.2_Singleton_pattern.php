<?php 
class Database {
  
  private static $instance;

  public static function getInstance(){
    if(!isset(self::$instance))
    self::$instance = new Database();
    return self::$instance;
  }

  private function __construct(){
    // Blocked 
  }

  private function __clone(){
    // Blocked
  }


}

// tạo 1 class chỉ có 1 đối tượng duy nhất
$obj = Database::getInstance();
$obj2 = Database::getInstance();
$obj3 = Database::getInstance();
// $obj4 = clone $obj; // Got error

echo '<pre style="color:red; font-weight: bold">';
var_dump($obj3);
echo  '</pre>';




?>