<?php
// updating data using pdo method
include('connectionusingpdo.php');
$q="update new_tab set name='ali',roll='110',address='lahore' where id=3";
$con->exec($q);
?>