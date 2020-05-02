<?php
// inserting data into database by object oriented method
include('connectionOO.php');
$q=" insert into new_tab (name,roll,address) values ('khan','105','lahore')";
$result=$con->query($q);
if($result){
    echo "data successfully inserted into database";
}
else{
    echo "data failed to insert into database";
}
?>