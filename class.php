<?php
class Mobile{
var $model; //////Data Member or properties
function showModel($number){
    global $model;
    $model=$number;
    echo "Model Number is: ".$model."<br>";
}
}
$samsung=new Mobile;
$samsung->showModel('A8');
$lg=new Mobile;
$lg->showModel('A9');
?>