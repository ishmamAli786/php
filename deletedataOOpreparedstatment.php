<?php
// delete data from database with object oriented by prepared statment
$con=new mysqli('localhost','root','','db');
//delete sql statment
$q="delete from new_tab where id=?";
//prepare statment
$result=$con->prepare($q);
if($result){
    $result->bind_param('i',$id);
    // variable and values
    $id=17;
    //execute prepared statement
    $result->execute();
    //number of rows effected
    echo $result->affected_rows."Rows deleted <br>";
}
else{
    echo "unable to delete";
}
// close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_close($con);
?>