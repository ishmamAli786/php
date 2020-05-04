<?php
// retrive data by using object oriented method with prepared statment
$con=new mysqli('localhost','root','','db') or die('connection failed');

//select all data
$q="select * from new_tab where id=?";

//prepared statment
$result=$con->prepare($q);
//bind parametr
$result->bind_param('i',$id);
$id=2;


//bind result set in variables
$result->bind_result($id,$name,$roll,$address);

//execute prepared statment
$result->execute();

//fetch singal row data
while($result->fetch()){
echo "id: ".$id."Name: ".$name."Roll: ".$roll."address: ".$address."<br>";
}
?>