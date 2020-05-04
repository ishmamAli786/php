<?php
// inserting data into database with object oriented by prepared statment
$con=new mysqli('localhost','root','','db') or die('connection failed');
//insert sql statment
$q="insert into new_tab(name,roll,address) values(?,?,?)";
// ? is called anonymous placeholder


//prepared statment
$result=$con->prepare($q);
//it return statment handle which will store in $result variable


// bind variable to prepared statment as parameters
$result->bind_param('sis',$name,$roll,$address);
$name="hashim";
$roll=130;
$address="karachi";


//execute prepare statment
$result->execute(); 

// for checking that data is successfully inserted or not affected function is used
echo $result->affected_rows."row insert";







//close prepared statment
$result->close();
//close connnection
$con->close();
?>