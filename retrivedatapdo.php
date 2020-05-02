<?php
//retrive data from database by pdo


//two types of array in php
//first is assoc array it return column name
//second is indexed array it retrun column number


// http://php.net/manual/en/pdostatment.fetch.php

//rowCount()
// it returns the number of rows affected by the last delete,insert or
//update statement executed by the corresponding PDOstatment object.
//simply it count how many number delete insert or update
include('connectionusingpdo.php');
$q="select * from new_tab";
$result=$con->query($q);

//for counting the row use rowcount function
/*echo $result->rowCount();*/
//if($result->rowCount()>0)


/*$row=$result->fetch(PDO::FETCH_ASSOC);*/
//fetch function is used to get one row from database
//fetch function is retrived both data asociative array and indexed array
/*echo "<pre>",print_r($row),"</pre>";*/
while($row=$result->fetch(PDO::FETCH_ASSOC)){
    echo "ID: ".$row['id']."Name:".$row['name']."Address:".$row['address']."<br>";

}
?>