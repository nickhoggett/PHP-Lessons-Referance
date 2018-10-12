<?php
    //root is the defualt username 
    $user_name = "root";
    //"" (blank) is the default password
    $password = "";
    $database = "addressbook";
    $server = "127.0.0.1";
    //These variables will not need to change if your loggin into a localhost as they are the default options used for testing.

    /*mysqli_connect(server_IP, user_name, $password) this function will open a connection to MySQL database.
    These can be entered directly into function without variables if need be. */

    mysqli_connect($server, $user_name, $password);
    //mysqli_connect('127.0.0.1', 'root');

    print "Connection to the Server opened";

    /* This method is NOT RECOMMENDED though as a user/hacker will be able to see the login details
    to the MySQL database */


?>