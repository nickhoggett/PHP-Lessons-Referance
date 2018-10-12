<?php

    require '../../configure.php';

        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

        //For the above code see www/lessons/Require.php

        $database = "addressbook";

        //for mysqli_select_db() see www/lessons/getDatabase.php
        $db_found = mysqli_select_db($db_handle, $database);

        if ($db_found) {

            //$SQL - This is SQL code - SELECT all the reord FROM the table called Table_Name; 
            //eg Select just First Name and Surname would be "SELECT First_Name, Surname" 
            //SQL is not case sensative. 
            $SQL = "SELECT * FROM tbl_address_book";

            //mysqli_query(variable for mysqli_connect(), SQL code variable)
            //this points the code to the table data
            $result = mysqli_query($db_handle, $SQL);
            
            //a while loop is used to return the data with an inbuilt function mysqli_fetch_assoc with our $result variable as the argument.
            while ($db_field = mysqli_fetch_assoc($result)) {
                
                // the while loop is returned as an array, with the associate key been the columns to print the value
                print $db_field['ID']. "<br>";
                print $db_field['First_Name']. "<br>";
                print $db_field['Surname']. "<br>";
                print $db_field['Address']. "<br>";
                
                //See all steps in the comments at the bottom. 

            }
            
        }

        else {
                
            print "Database Not Found";

        }
             
        mysqli_close($db_handle);

    /* Steps 

    1. Set up a SQL Statemnt that can be used to get the record from the 
    database table

    2. Use mysqli_query() to bring back the recrods we've specified in Step 1

    3. Use mysqli_fetch_accoc() to set up an array. The array will contain all the 
    records that were returned in Step 2.

    4. Loop round all the data in the query using a While Loop.

    Step 1 was this, in the code: 

        $SQL = "SELECT * FROM tbl_address_book";

    Step 2 was this: 

        $result = mysqli_query($SQL);

    Step 3 was this: 

        $db_field = mysqli_fetch_assoc($result)

    And Step 4 was this: 

        the while loop. */
        
?>