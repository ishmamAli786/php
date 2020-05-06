<?php
// a cooky is a small piece of test data set by Web Server that resided on the client machine
//once it is been set the client automatically return the cookies to the web server with each request that it makes
//this allows the server to place value it wish to remember in the cookie and have access to them when creating an response



// php transparently support http cookies. Cookies are mechanism for storing data
// in the remove browser and thus tracking or identifying retrun users.
// cookies are the part of the htttp header.


//setCookie() is used to set/create/sent cookies. This function must appear before the <html> tag.
setCookie("username","ishmam");
?>