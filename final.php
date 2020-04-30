<?php
// a final method cannot be overriding in child class
// final keyword is used to create final method or final class
// a final class cannot be inherited it mean we cannot create sub class of an final class
class Father{
    function disp(){
        echo "super class <br>";
    }
}
class Son extends Father{
    function disp(){
        echo "son class";
    }
}
// final keyword is used for making not changable method

?>