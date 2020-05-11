<?php
// filter_has_var() this function checks if a variable of a specified input type exit.
// it return true on success and false on failure
if(isset($_POST['submit'])){
    if(filter_has_var(INPUT_POST,'name')){
        echo "Name Found";
    }
    else{
        echo "Name Not Found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Name: <input type="text" name="name" id="name">
    <input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>