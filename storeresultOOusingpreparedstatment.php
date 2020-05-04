<?php
// store result with object oriented by prepared stament
$con=new mysqli('localhost','root','','db') or die('connection failed');

//select all data
$q="select * from new_tab";

//prepared statment
$result=$con->prepare($q);



//execute prepared statment
$result->execute();

//store result
$result->store_result();

//number of rows
echo $result->num_rows;

//free result
$result->free_result();
//close prepared statment
$result->close();
//close connection
$con->close();
?>
