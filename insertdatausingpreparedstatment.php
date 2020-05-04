<?php
// inserting data using prepared statment
$con=mysqli_connect('localhost','root','','db');
$q="insert into new_tab (name,roll,address) values(?,?,?)";
// ? is called anonymous placeholder

//prepare statment
$result=mysqli_prepare($con,$q);
if($result){
    //Bind variable to prepared statment as parameter
    mysqli_stmt_bind_param($result,'sis',$name,$roll,$address);

    //variables and values


    $name="aslam";
    $roll="111";
    $address="karachi";

    //execute prepared statment
    mysqli_stmt_execute($result);


   /* $name="parviz";
    $roll="111";
    $address="karachi";

    //execute prepared statment
    mysqli_stmt_execute($result); */ 

    //for checking how many number of rows are inserted into the database
    echo mysqli_stmt_affected_rows($result)."row inserted <br>";

}
else{
    echo "unable to inserted";
}
// close prepared statment
mysqli_stmt_close($result);
//close connection
mysqli_close($con);
?>