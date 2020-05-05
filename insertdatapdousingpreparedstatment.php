<?php
// inserting data into database with pdo using prepared statment
try{
    $con=new PDO("mysql:host=localhost;dbname=db","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected <br> <hr>";
}
catch(PDOException $e){
    echo "connection failed".$e->getmessage();
}
try{
    // using anonymous positional placeholder
    $q="insert into new_tab(name,roll,address) values(?,?,?)";
    //prepared statment
    $result=$con->prepare($q);

    //bind parameter to prepare statment
    $result->bindParam(1,$name,PDO::PARAM_STR);
    $result->bindParam(2,$roll,PDO::PARAM_STR);
    $result->bindParam(3,$address,PDO::PARAM_STR);

    //variables and values
    $name="Rohan";
    $roll=106;
    $address="kolkata";

    //execute prepare statment
    $result->execute();
    echo $result->rowCount()."Row inserted <br>";
}
catch(PDOException $e){
    $e->getmessage();
}

//close prepared statment
unset($result);

//close connection
$con=null;
?>