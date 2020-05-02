<?php
// creating connection using pdo
/*$con=new PDO("mysql:host=localhost;dbname=db;","root","");
if($con){
    echo "database has been created successfully";
}
else{
    echo "database failed to create";
}
// dsn stand for data source name
*/
$dsn="mysql:host=localhost; dbname=db;";
$db_user="root";
$db_password="";
try{

    // create connection
    $con=new PDO($dsn,$db_user,$db_password);
    //es line ma ham aik function ko cll kar rahy ha or usy kaha rahy ha
    //ky ku bhi error ho usy exception ma handle karna ha simple mean
    //simple mean error mode enable kar rahy ha
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected";

}
catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}
?>