<?php
class Father{
    public static $a=20;
}
class Son extends Father{
    public function display(){
        echo self::$a;
    }  
}
$obj=new Son;
$obj->display();
?>