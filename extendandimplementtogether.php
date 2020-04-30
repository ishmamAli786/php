<?php
// extend and implement together
class Father{
    public $sci=101;
}
interface Mother{
    const math=102;
    function disp();
}
class Son extends Father implements Mother{
    function disp(){
        echo  $this->sci;
        echo Self::math;
    }
}
$obj=new Son;
$obj->disp();
// alwasys interface sy interface extend kiya jate ha
// always interface sy class implements ki jate ha
// aik class sy aik class he extend ki ja  sakti ha
// aik class sy 2 classis extend ni ki ja sakti ha
?>