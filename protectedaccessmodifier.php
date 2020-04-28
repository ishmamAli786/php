<?php
//cannot access protected property and method outside class or objecct
//protected property or method can be accessed within the same class
//child class can access parent's or grand praent's protected property or method
//in protected we can access parent class property or method into child class
class Father{
    protected $a=30;
}
class Son extends Father{
    public function displayChild(){
        echo $this->a;

    }
}
$obj=new Son;
$obj->displayChild();
?>