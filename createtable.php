<?php
// creating table by procedural method
$con=mysqli_connect('localhost','root','','db') or die("connection failed");
$q="create table new_tab(id int auto_increment primary key,name varchar(255),roll int,address text)";
$result=mysqli_query($con,$q);
if($result){
    echo "data successfully inserted into database";
}
else{
    echo "data failed to inserted into database";
}
?>