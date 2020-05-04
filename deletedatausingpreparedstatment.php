<?php
// deleting data into database by prepared statement
$con=mysqli_connect('localhost','root','','db');
//delete sql statment
$q="delete from new_tab where id=?";
//prepare statment
$result=mysqli_prepare($con,$q);
if($result){
    mysqli_stmt_bind_param($result,'i',$id);
    // variable and values
    $id=20;
    //execute prepared statement
    mysqli_stmt_execute($result);
    echo mysqli_stmt_affected_rows($result)."Rows deleted <br>";
}
else{
    echo "unable to delete";
}
// close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_close($con);
?>