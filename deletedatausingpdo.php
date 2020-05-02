<?php
// deleting data by using pdo method
include('connectionusingpdo.php');
$q="delete from new_tab where id=6";
$result=$con->exec($q);
echo "No of rows deleted".$result;
?>