<?php
// retrive data with procedural method by prepared statment

//creating connection with database by procedural method

$con=mysqli_connect('localhost','root','','db') or die("cannot create connection with database");
//select all data
$q="select * from new_tab where id=?";
// prepared statment
$result=mysqli_prepare($con,$q);

//Bind parameter
mysqli_stmt_bind_param($result,'i',$id);
$id=2;
// i denote data type


//Bind result set in variable
//variable name can be different but similare is recomanded
mysqli_stmt_bind_result($result,$id,$name,$roll,$address);

//execute prepared statment
mysqli_stmt_execute($result);
//Fetch singal Row Data
/*mysqli_stmt_fetch($result);
echo "ID : ".$id."Name: ".$name."Roll :".$roll."Address: ".$address."<br>"; */
/*mysqli_stmt_fetch($result);
echo "ID : ".$id."Name: ".$name."Roll :".$roll."Address: ".$address."<br>";
mysqli_stmt_fetch($result);
echo "ID : ".$id."Name: ".$name."Roll :".$roll."Address: ".$address."<br>";*/

//Fetch all table data
while(mysqli_stmt_fetch($result)){
    echo "ID : ".$id."Name: ".$name."Roll :".$roll."Address: ".$address."<br>";
}


//close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_stmt_close($con);



?>