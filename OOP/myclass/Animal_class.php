<?php 
class Animal {
  public $bark;

  public function __construct($bark = 'goal'){
    echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
    $this->bark = $bark;
  }

  public function __destruct(){
    echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
  }
}
?>