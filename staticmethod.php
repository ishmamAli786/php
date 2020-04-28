<?php
//static method are class method they are meant to call on the class,not on an object
//call the method without having to first create an object of that class
class Father{
    public static function display(){
        echo "hello what are you doing";
    }
}
Father::display();
?>