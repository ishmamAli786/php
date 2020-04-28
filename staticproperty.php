<?php
//static property or static variable
//kissi static property ko non static function ma call karty ha to self ka keyword use hota ha
// :: this is called scope resolution operator
class Father{
    public static $a=10;
    public function disp(){
        echo self::$a;
    }
}
$obj=new Father;
$obj->disp();

?>