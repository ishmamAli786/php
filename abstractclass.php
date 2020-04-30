<?php
// A class that is declared with abstract keyword, is known as abstract class in php. it can have abstract and non abstract methods. it needs to be extends and its methods implemented. object of an abstract class cannot be created


//a method that is declared as abstract and does not have implementation is known as abstract method
// abstract method ko jo class inherit kary gi wo class uski defination liky gi
//rules or points
//object of an obstract class cannot be created

/*abstract class Father{
    public function display(){
        echo "Normal Method";
    }
}
$obj=new Father;
$obj->display();*/

//the abstract method of abstract class must be defined in its subclass

abstract class Father{
    public function display(){
        echo "Normal Method";
    }
    abstract function disp();
}
class son extends Father{
    public function disp(){
        echo "Abstract method <br>";
    }
}
$obj = new Son;
$obj->disp();
//agar abstract class ky andar abstract method ha tu usy abstract class ma sirf declare karna ha initilize esy subclass or wo class jo extend kary gi usma karna ha
//aik abstract class ky andar abstract methohd hona zarori ni ha but aik abstract method ky andar aik abstract class hona zarori ha


?>