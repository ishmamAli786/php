<?php
// mysqli procedural with prepared  statment


//function for prepare statement
//mysqli_prepare() it prepare an sql statement and return a statment handle to be used
// for further operations on the statment or false if an error occured.the query must consist of a singal sql statment

//mysqli_stmt_bind_param() it binds variable to a prepared statment as parameters.it return true on success or false on failure

//mysqli_stmt_execute() it execute a query that hs been previously prepared using the mysqli_prepare() function. it return True on success or False on failure
//mysqli_stmt_close() it close a prepared statment and also deallocate the statment handle
//if the current statment has pending or unread result,this function cancels them so that the next query can be executed
//it returns true on success or false on failure


// for SELECT
// mysqli_stmt_bind_result() it binds variable to a prepared statment for result storage. it return true on succeess or FALSE  on failure

//mysqli_stmt_fetch() it fetch the result from a prepared statment into the variable bound by mysqli_stmt_bind_result().

//mysqli_stmt_store_result() it transfer a result set from a prepared statment. it return true on success or false on failure

//mysqli_stmt_num_rows() it return the number of rows in statments result set

// mysqli_stmt_free_result() it frees the result memory associated with the statment,,which was allocated by mysqli_stmt_store_result()

?>