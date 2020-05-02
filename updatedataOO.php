<?php
// delete data from database by object oriented
include('connectionOO.php');
$q="update new_tab set name='ishmam',roll='103',address='faislabad' where id=2";
$result=$con->query($q);
if($result){
    echo "data updated successfully from database";
}
else{
    echo "data failed to update from database";
}
?>