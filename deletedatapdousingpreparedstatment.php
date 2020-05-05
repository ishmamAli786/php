<?php
// deleting data into database using pdo with prepared statment
try{
    $con=new PDO("mysql:host=localhost;dbname=db","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected <br> <hr>";
}
catch(PDOException $e){
    echo "connection failed".$e->getmessage();
}

// using named placeholder
$q="delete from new_tab where id= :id";
//prepared statment
$result=$con->prepare($q);
//bind parameter to prepared statment
$result->bindParam(':id',$id,PDO::PARAM_INT);

//variables and values
$id=26;

//execute prepared statment
$result->execute();
echo $result->rowCount()."Row Deleted <br>";

//close prepared statment
unset($result);

//close connection
$con=null;
?>