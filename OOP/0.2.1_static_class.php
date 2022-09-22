<?php 

class Bar{
    public static function test(){
        var_dump(static::class);
    }
}

class Foo extends Bar {

}

Foo::test();
Bar::test();



?>