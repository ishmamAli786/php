<?php
$q="selec * from student";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)){
    echo id;
}
?>