<?php
// a preparedstatment of parametrized statment is used to execute the same
// statemeent repetedly with high efficency. the prepared statment execution consist of two stages prepare and execute
// at the prepare stage a statment template is sent to the database server. the server perform a syntex check and initilize server internal resources for later use
//at the execute stage the parameters values are sent to the server. the server create
// create a statment from the statment template and these values executes it.


//advantage
// prepared statment are very useful against sql injection
// prepared statment reduced parsing time as the preparation on the query is
// done only once (although the statment execute multiple time)
?>