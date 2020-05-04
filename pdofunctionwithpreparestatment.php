<?php
//pdo fucntion with prepared statment



//prepare() it prepare an  sqli statment to be execute by execute() method.
// it returns pdo statment object on success or return false or emits pdoexception on failure


//rules
//the statment template can contain zero or more named (:name) or question mark (?)
//parameter markers for which real values will be submitted when the statment executed.

//both name and question marked parameter markers cannot be used within the same statment templete;only one or the other parameter style

//bindparam() it binds a parameter to the specified variable name. it  return true on success or false on failure
//Note:Multiple value cannot be bound to a singal parameter

//bindValue() it bind a value to a parameter.it return true on success or false on failure

// The bindParam() is used to pass variable not value while the bindValue() function is used to pass both value and fucntion

// The bindParam() function binds a parameter to named or question mark placeholder in SQL statment
// while the bindValue() function binds a value to named or question mark in SQL statment

// if you are executing the query multiple time with different data
// with bandParam you'd just need to update the variable
// with bindValue you'd need to re-bind data each time

//execute() it execute prepare statment

?>