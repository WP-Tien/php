<?php 
  /**
   * Interface không phải là class, đây là một mẫu giao diện quy định cách thức hoạt động.
   * Interface không cho phép định nghĩa rõ cách hoạt động của method, chỉ dừng lại ở khai báo method.
   * Việc định nghĩa các method này sẽ được thực hiện ở class con.
   * Trong interface chúng ta khai báo được Hằng nhưng không thể khai báo Biến.
   * giống abstract ko khởi tao được vì nó không phải là đối tượng.
   * Các lớp implement interface thì phải khai báo và định nghĩa lại các phương thức trong interface đó.
   * Một class có thể implement nhiều interface.
   * Interface có thể kế thừa nhau.
   */

  // interface chỉ thiết lập từ khóa public

interface People {
  public function eat();
  public function sleep();
}

interface Bird {
  public function fly();
}

class Lion {
  public function run(){
    echo '<h3 style="color:red; font-weight:bold">'. __METHOD__ .'</h3>';
  }
}

class Superman extends Lion implements People, Bird {

  public function eat(){
    echo '<h3 style="color:red; font-weight:bold;">'. __METHOD__ .'</h3>';
  }

  public function sleep(){
    echo '<h3 style="color:red; font-weight:bold;">'. __METHOD__ .'</h3>';
  }

  public function fly() {
    echo '<h3 style="color:red; font-weight:bold;">'. __METHOD__ .'</h3>';
  }

}

$superman = new Superman();
$superman->run();
   
?>