<?php
// delete data from database by object oriented
include('connectionOO.php');
$q="delete from new_tab where id=1";
$result=$con->query($q);
if($result){
    echo "data deleted successfully from database";
}
else{
    echo "data failed to delete from database";
}
?>