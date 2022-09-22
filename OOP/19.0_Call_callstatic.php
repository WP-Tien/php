<?php 
  /**
   * Khi một đối tượng gọi một phương thức, mà phương thức này chưa được định nghĩa trong class, thì phương thức __cal() được gọi để thay thế.
   * Khi một đối tượng gọi một phương thức static, mà phương thức này chưa được định nghĩa torng class, thì phương thức __callstatic() được gọi để thay thế 
   * __call() và __callstatic() Phải được khai báo ở trạng thái public.
   */

class Student {

  private $name;

  public function __construct(){
    $this->name = 'John Smith';
  }

  // name ten phương thức ko tồn tại
  // params là các giá trị truyền vào phương thức ko tồn tại đó.
  public function __call($name, $params){
    echo '<pre style="color:red; font-weight: bold">'.__METHOD__.'</pre>';
    echo '<pre style="color: red; font-weight: bold">';
    print_r($name);
    echo '</pre>';
    
    echo '<pre style="color:red; font-weight: bold">';
    print_r($params);
    echo '</pre>';
  }

  public static function __callstatic($name, $params){
    echo '<pre style="color:red; font-weight: bold">'.__METHOD__.'</pre>';
    echo '<pre style="color: red; font-weight: bold">';
    print_r($name);
    echo '</pre>';
    
    echo '<pre style="color:red; font-weight: bold">';
    print_r($params);
    echo '</pre>';
  }
} 

// $student = new Student();
// $student->show_info('Huu Tien', '03/08/1995', array(2,3,4) );

Student::show_info('Huu Tien', '03/08/1995', array(2,3,4) );

?>