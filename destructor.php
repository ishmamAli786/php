<?php
//in php destructor is used when explicitly destroy an object or when all references of an object go out of scope
//for destroy object in  php is speciall name __destruct.
//destruct do not have argument
class Student{
    function __construct(){
        echo "constructor called";
    }
}
$ishmam=new Student();

class Mobile{
    var $model;
    function __construct($nomodel){
        $this->model=$nomodel;
        echo $this->model;
    }
    function __destruct(){
        echo "<br>Object vanished";
    }
}
$lg=new Mobile(10);
?>