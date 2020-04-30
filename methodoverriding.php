<?php
//overriding refers to the ability of a subclass to re-implement a method inherited from a superclass
// only inherited methods can be overriden
//final and static methods cannot be overriden
//the overriding method must have same argument list
class Father{
    function disp(){
        echo "super class";
    }
}

class Son extends Father{
    function disp(){
        echo "son class";
    }
}
$obj=new Son;
$obj->disp();
?>