<?php
class Father{
    public $a;
    function __construct($x){
        $this->a=$x;
        echo "<br> PARENT CONSTRUCTOr CALLED".$this->a;
    }
}
class Son extends Father{
    public $b;
    function __construct($a,$y){
        parent::__construct($a);
        $this->b=$y;
        echo "<br> SON CONSTRUCTOr CALLED".$this->b;
    }

}
$obj=new son(10,20);
?>