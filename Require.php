<?php
    //require is a statement no round brackets, 
    //similiar to the include, however the inbuilt function will halt the script when error is detected. 
    //similar to link  in other scripts like HTML 

    require '..\..\configure.php';

    // ..\ - go up folder (above has been stacked).

       $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

        print "Server Found". "<br>";


?>