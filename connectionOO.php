<?php
// connection with database by object oriented method

///create connection
$con=new mysqli('localhost','root','','db') /* or die("connection failed")*/;
//checking connectionn
if($con->connect_error){
    echo "connection failed";
}
else{
    echo "connection successfull <hr>";
}


?>