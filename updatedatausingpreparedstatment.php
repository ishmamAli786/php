<?php
// update data by prepared statment
$con=mysqli_connect('localhost','root','','db') or die("connection failed");
//update sql statment
$q="update  new_tab set name=?,roll=?,address=? where id=?";
//prepare statment
$result=mysqli_prepare($con,$q);
if($result){
    mysqli_stmt_bind_param($result,'sisi',$name,$roll,$address,$id);
    // variable and values
    $name="redmi";
    $roll=112;
    $address="sialkot";
    $id=21;
    //execute prepared statement
    mysqli_stmt_execute($result);
    echo mysqli_stmt_affected_rows($result)."Rows updated <br>";
}
else{
    echo "unable to delete";
}
// close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_close($con);
?>