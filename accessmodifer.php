<?php
// public property and method can be accessad from anywhere
class Father{
    public $a;
    public function displayParent(){
        echo " the value of a is $this->a";
    }
}
/*$obj=new Father;
$obj->a=10;
$obj->disp();*/
//Now we see the concept in inheritance
class Son extends Father{
    public function displayChild($x){
        $this->a=$x;
        echo "child value is this $this->a";
        $this->displayParent();
    }
}
$obj=new Son;
$obj->displayChild(10);
?>