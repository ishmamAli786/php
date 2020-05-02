<?php
// creating database by procedural method
//when you create database do not specify database name here
$con=mysqli_connect('localhost','root','');
if($con){
    echo "connection successful <br>";
}
else{
    echo "connection failed";
}
$q="create database db";
$result=mysqli_query($con,$q);
if($result){
    echo "database create successfully";
}
else{
    echo "database craete failed";
}
?>