<?php
// private property and method can be access only within the same class
class Father{
    private $a;
    public function displayParent(){
        $this->a=30;
        echo " parent function $this->a";
    }
}
$obj=new Father;
$obj->displayParent();
?>
?>