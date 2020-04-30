<?php
//implementing more than one interface in a singal class
// it is also called multiple inharitance
interface Father{
    const a=101;
    function disp();
    function getvalue();
}
interface Mother{
    const b=102;
}
class Son implements Father,Mother{
     function disp(){
       echo Mother::b;
    }
    function getvalue(){

    }
}
$obj =new Son;
$obj->disp();
?>