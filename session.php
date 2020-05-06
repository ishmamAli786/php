<?php
// a session is a way to store information (in variables) to be used accross multiple pages
session_start();
//set session variable
$_SESSION['username']="ishmam";
$_SESSION['password']=123456;

//access session variable

echo $_SESSION['username'];
echo $_SESSION['password'];


//check session variable are set or not
if(isset($_SESSION['username'])){
    echo "session variables are set";
}
else{
    echo "session variable are not set";
}

//unset function is used to unset one session variable
unset($_SESSION['username']);



// session unset fucntion is used to unset all the session varible in the program
session_unset();


//session_destroy function is used to destory session
session_destroy();
?>