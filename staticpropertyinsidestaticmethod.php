<?php
//slef keyword is used to access the static property inside the static function
// Static propert cannot be access throught the object using the arrow operator -> $this is
//$this is not available inside the method declared as  static. static method cannot access non static porperties
class Father{
public static $a=30;
public  function disp(){
    echo self::$a;
}
}
$obj=new Father;
$obj->disp()
//non static property cannot be access in static method
//but static property can be access into non static methiod
?>