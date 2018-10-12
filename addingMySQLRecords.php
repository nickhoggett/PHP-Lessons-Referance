<?php

    require '../../configure.php';

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

        //For the above code see www/lessons/Require.php

        $database = "addressbook";

        //for mysqli_select_db() see www/lessons/getDatabase.php
        $db_found = mysqli_select_db($db_handle, $database);

        if ($db_found) {

            //Insert SQL syntax is "INSERT INTO table_name (Column/s) VALUE (values for columns)".
            $SQL = "INSERT INTO tbl_address_book (First_Name, Surname, Address) VALUES ('Nick', 'Hoggett', '23 Parkhurst Rd')";
            $result = mysqli_query($db_handle, $SQL);
            mysqli_close($db_handle);

            print "Records added to the database";
            
        }
        else {

            print "Database Not Found";

        }

    /* Steps taken in the code 

    1. Open a connection to MySQL
    2. Sepecify thedatabase we want to open
    3. Set up an SQL Statement that can be used to add record to the database table.
    4. Use mysqli_query() again, but this time to add records to the table
    5. Close the connection */
        
?>