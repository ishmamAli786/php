<?php
// inserting data into database by pdo method
include('connectionusingpdo.php');
//exec($sql_statement)- it execcute an SQL statment in a singal function call
//returning the  number of rows affected by the statment.it does not return the result from select statement
$q="insert into new_tab (name,roll,address) values ('php','108','delhi')";
$effected_rows=$con->exec($q);
/*if($result){
    echo "data insert into database successfully";
}
else{
    echo "data failed to insert into database";
}
*/
//efftected rows variable describe that how many rows are inserted into database
echo  $effected_rows."Row inserted <br>";
?>