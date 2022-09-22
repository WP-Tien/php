<?php 

// Private để mọi thứ riêng tư để chương trình không nhận nhiều xung đột (hiểu)
// set và get viết bằng tay ko như ruby support nhìu hơn ^^ !

class Human {

  private $name = '';
  private $birthday = '';
  private $skin = '';

  public function set_name($name){
    $this->name = $name;
  }

  public function set_birthday($birthday){
    $this->birthday = $birthday;
  }

  public function set_skin($skin){
    $this->skin = $skin;
  }

  public function get_name(){
    echo $this->name;
  }

  public function get_birthday(){
    echo $this->birthday;
  }

  public function get_skin(){
    echo $this->skin;
  }
}

$human = new Human();

$human->set_name('Huu Tien');
$human->get_name();

?>