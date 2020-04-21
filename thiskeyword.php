<?php
//this keyword point to the current object
class Mobile{
    public $model;
    function showModel(){
      echo  $this->model;
    }
}
$samsung=new Mobile;
$samsung->model="A8+";
$samsung->showModel();
?>