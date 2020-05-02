<?php
// inserting data into database by procedural method
$con=mysqli_connect('localhost','root','','checking') or die('database not connnected');
$q="insert into info (name,class,roll) values('ishmam','bs-it','103')";
$result=mysqli_query($con,$q);
if($result){
    echo "data has been send successfull";
}
else{
    echo "data failed to send into database";
}
?>