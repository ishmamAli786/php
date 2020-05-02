<?php
// retrive data from database by object oriented method
include('connectionOO.php');
$q="select * from new_tab";
$result=$con->query($q);
while($row=$result->fetch_assoc()){
    echo $row['id'];
    echo $row['name'];
}
?>