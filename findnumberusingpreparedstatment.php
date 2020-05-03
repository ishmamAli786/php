<?php
// find the number by using the prepared statment
$con=mysqli_connect('localhost','root','','db') or die('connction failed');
$q="select * from new_tab";
$result=mysqli_prepare($con,$q);
//execute statment
mysqli_stmt_execute($result);
//store result
mysqli_stmt_store_result($result);
//number of rows
$total_row=mysqli_stmt_num_rows($result);
echo $total_row;
//free result
mysqli_stmt_free_result($result);
//close prepared statement
mysqli_stmt_close($result);
?>