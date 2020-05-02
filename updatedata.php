<?php
// update data by procedural method
$con=mysqli_connect('localhost','root','','checking') or die('database failed to connect');
$q="update info set name='ali khan',class='bs-cs',roll='105'";
$result=mysqli_query($con,$q);
if($result){
    echo "data has been update successfully";
}
else{
    echo "data failed to update";
}
?>