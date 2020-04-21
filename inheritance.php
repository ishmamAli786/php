<?php
//the process of deriving the new class by old class is called inheritance or derviation
//old class is called super class new class is called sub class or child class
//there are four type of inheritance
//single inheritance
//single inhartience if a class is derived or inhariet from one base class or parent class
class Father{   //parent class
    public $a;
    public $b;
    function getValue($x,$y){
        $this->a=$x;
        $this->b=$y;
    }
}
class Son extends Father{
    function display(){
        echo "Value of A: $this->a <br>";
        echo "Value of B: $this->b <br>";
    }
}
$obj=new Son();
$obj->getValue(5,10);
$obj->display();
//multiple inheritance
//if a class is derived form more than one base class or parent class than it is called multiple inheritance class
//in php there is no example of multiple inheritance







//multi level inheritance
//in multi level inheritance, the class inherits the feature of another derived class or child class


?>