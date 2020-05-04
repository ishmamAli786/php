<?php
// basic function of object oriented with prepared statment


//prepare() it prepare an sql statment and return a statment handle to be used for
// for further operation on the statment or false if an error occured.
// the query must consist of a singal statement

// bind_param() it binds variable to prepared statment as parameter.
//it return true on success and false on failure

//execute() it execute a query that has been previously prepared using the prepare() function.
// it return true on success and false on failure


//close() it close a prepare statment and also deallocate the statment
// hanlde. if the current statment has pending or unread result, this function cancel them
// so that the next query can be executed. it return true on success and false on failure


//for select
//bind_result() it bind variable to prepared a statement for result storage
//it return true on success and false on failure
?>