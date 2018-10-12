<?php

    require '../../configure.php';

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

        print "Server Found". "<br>";

            //For the above code see www/lessons/Require.php

            //Name of the database is put into a variable
            $database = "addressbook";

            /* function mysqli_select_db(the variable we used to connect to server, the database we want)
             this function select the data base you wish open,
             if the database is found then the returned value is true
             if the database is not found then the returned value is false */
            $db_found = mysqli_select_db($db_handle, $database);

            if ($db_found) {

                print "Database found";

            }

            else {
                
                print "Database Not Found";

            }
            
            //dataclose function. 
            mysqli_close($db_handle);

?>