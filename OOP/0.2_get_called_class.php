<?php 
 /**
  * ! http://php.net/manual/en/function.get-called-class.php
  */
class foo{

    static public function test(){
        var_dump(get_called_class());
    }

}

class bar extends foo{

}

foo::test();
bar::test();

?>