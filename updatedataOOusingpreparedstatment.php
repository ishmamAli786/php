<?php
// updating data with object oriented by prepared statment
$con=new mysqli('localhost','root','','db') or die("connection failed");
//update sql statment
$q="update  new_tab set name=?,roll=?,address=? where id=?";
//prepare statment
$result=$con->prepare($q);
if($result){
    $result->bind_param('sisi',$name,$roll,$address,$id);
    // variable and values
    $name="shan";
    $roll=112;
    $address="sialkot";
    $id=16;
    //execute prepared statement
    $result->execute();
    echo $result->affected_rows."Rows updated <br>";
}
else{
    echo "unable to delete";
}
// close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_close($con);
?>