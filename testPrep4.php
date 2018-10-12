<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DELETE - Prepare Function</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php

    $email = "";
    $passW = "";
    $uName = "";

    if (isset($_POST['Submit1'])) {

        require '../../configure.php';

        $uName = $_POST['user'];
        $passW = $_POST['pass'];
        $email = $_POST['email'];

        $database = "membertest";

        $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database);

        if ($db_found) {
            
            //SQL code to delete the row from SQL table -
            //DELETE FROM members table WhERE the email matches the $email variable.
            $SQL = $db_found->prepare("DELETE FROM members WHERE email=?");

            $SQL->bind_param('s', $email);
            $SQL->execute();

            print "ROW DELETED";

        }

        else {

            print "Database NOT Found ";
        }

    }
    
    ?>
</head>
<body>
    <form name ="form1" method = "POST" action ="testPrep4">
        User <input type = 'text' Name = 'user' value ='test2'>
            <br>
        Pass <input type = 'text' Name = 'pass' value ="test2">
            <br>
        Email Address <input type = 'text' Name = 'email' value ="<?php print $email ; ?>">

        <input type ="Submit" name = "Submit1" value = 'Login'>
    </form>
</body>
</html>