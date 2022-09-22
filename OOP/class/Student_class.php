<?php 
  class Student{

    public $code;
    public $name;
    public $birthday;

    /** 
     * Tạo Construct 
    */
    // public function __construct(){
    //   echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
    //   $this->code = "025451975";
    //   $this->name = "Huu Tien";
    //   $this->birthday = "03/08/1995";
    // }

    /** 
     * Tạo Construct có truyển tham số 
    */
    // public function __construct($code = "025451975", $name = "Huu Tien", $birthday = "03/08/1995"){
    //   echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
    //   $this->code = $code;
    //   $this->name = $name;
    //   $this->birthday = $birthday;
    // }

    /** 
     * Tạo Construct tham số là một mảng
    */
    public function __construct($array = array('code' => "025451975", 'name' => "Huu Tien", 'birthday' => "03/08/1995")){
      echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
      $this->code = $array['code'];
      $this->name = $array['name'];
      $this->birthday = $array['birthday'];
    }

    public function setCode($value){
      $this->code = $value;
    }

    public function setName($value){
      $this->name = $value;
    }

    public function show_info(){
      echo "Code: $this->code";
      echo "<br>";
      echo "Name: $this->name";
      echo "<br>";
      echo "Birthday: $this->birthday";
    }

    public function send(){
      echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
    }

    public function __destruct(){
      echo '<h3 style="color:red; font-weight:bold">' . __METHOD__ . '</h3>';
    }
  }
?>