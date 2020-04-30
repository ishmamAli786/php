<?php
interface Father{
    const marks=101;
    function display();
    function getValue();
}
class Son implements Father{
    public $a;
    function display(){
        echo  Father::marks;
    }
    function getValue(){

    }
}
$obj=new Son;
$obj->display();

?>