<?php
// delete data by procedural method
$con=mysqli_connect('localhost','root','','checking') or die ('database not connected');
$q="delete from info where id=1";
$result=mysqli_query($con,$q);
if($result){
    echo "record deleted successfully";
}
else{
    echo "record failed to delete";
}
?>