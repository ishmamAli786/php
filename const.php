<?php
//const keyword is used to create class constant in php class
//once you initilize a const variable you can't reinitiate it
//there are constants desgined to be used by classes not objects
class Father{
    const mark=101;
    public function display(){
        echo self::mark;
    }
}
$obj=new Father;
echo Father::mark;
?>