<?php
// update data using pdo with prepared statment
try{
    $con=new PDO("mysql:host=localhost;dbname=db","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected <br> <hr>";
}
catch(PDOException $e){
    echo "connection failed".$e->getmessage();
}

// using named placeholder
$q="update new_tab set name= :name, roll= :roll, address= :address, where id= :id";
//prepared statment
$result=$con->prepare($q);
//bind parameter to prepared statment
$result->bindParam(':name',$name,PDO::PARAM_STR);
$result->bindParam(':roll',$roll,PDO::PARAM_INT);
$result->bindParam(':address',$address,PDO::PARAM_STR);
$result->bindParam(':id',$id,PDO::PARAM_INT);

//variables and values
$name="ishmam";
$roll="135";
$address="kamalia";
$id=25;

//execute prepared statment
$result->execute();
echo $result->rowCount()."Row updated <br>";

//close prepared statment
unset($result);

//close connection
$con=null;
?>