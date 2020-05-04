<?php
// retrive data by pdo with prepared statment
try{
$con=new pdo("mysql:host=localhost; dbname=db","root","");
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "conected <hr>";
}
catch(pdoEXception $e){
    echo "connection failed".$e->getMessage();
}
try{
    //create connection
    $q="select * from new_tab";

    //prepared statment
   $result= $con->prepare($q);
   //prepare function return a object and store it in result variable


   //execute prepare statment
   $result->execute();

   //bind by column number
   // bind by column name just change 1 into id and 2 into name and soo on
   $result->bindColumn(1,$id);
   $result->bindColumn(2,$name);
   $result->bindColumn(3,$roll);
   $result->bindColumn(4,$address);
   while($result->fetch(PDO::FETCH_BOUND)){
    echo "iD: ".$id."Name : ".$name."Roll : ".$roll."Address: ".$address."<br><br>";
   }

   
  /* //fetch data
  while($row=$result->fetch(PDO::FETCH_ASSOC)){
  echo "iD: ".$row['id']."Name : ".$row['name']."Roll : ".$row['roll']."Address: ".$row['address']."<br><br>";


  } */
}
catch(pdoEXCEPTION $e){
    echo $e->getmessage();
}





//close prepared statment
unset($result);
// close connection
$con=null;
?>