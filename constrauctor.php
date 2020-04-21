<?php
//constructor is the special type of method for initilizing an object when it is created
//we can say constructor is the automatically creation of an object
//constructor name and class name should be same
//constructor has special name in php __construct
//Declaration of Constructor
//Deafult constructor
class Student{
    function __construct(){
        echo "constructor called";
    }
}
$ishmam=new Student();
//type of constructor
//there has two types of constrcutur no 1 is default constrcutor and 2 is parametarized constructor
//default constructor is the constructor in which  has no parameter
//parametrize constructor is the constructor in which have parameter




//in every code there is default constructor exist 
//once you create your own construtor than default constructor in no longer accessable






//parametrize constructor
class Mobile{
    var $model;
    function __construct($nomodel){
        $this->model=$nomodel;
        echo $this->model;
    }
}
$lg=new Mobile(10);
?>