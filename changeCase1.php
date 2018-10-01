<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Case</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php

        //$full_name is set to all lower case letters

        $full_name = 'bill gates';

        if (isset($_POST['Submit1'])) {
            
            $full_name = $_POST['username'];
            
            // ucwords() function updates any words first letter

            $full_name = ucwords($full_name);

        }

        //usfirst() function updates only the first word
        //strtoupper() function - string to upper - updates all letters to capitals
        //strtolower()function - string to lower - updates all letters to lower case

        $change_to_lowercase = "CHANGE THIS";
        $change_to_lowercase = strtolower($change_to_lowercase);
        print $change_to_lowercase. "<br>";

        $change_to_uppercase = "change this";
        $change_to_uppercase = strtoupper($change_to_uppercase);

        print $change_to_uppercase. "<br>";
        
    ?>
</head>
<body>
    
    <form name = "form1" method = "post" action = "changeCase1.php">
        <input  type = "text" name = "username" value = "<?php print $full_name; ?>" >
        <input  type = "Submit" name = "Submit1" value = "Logon">
    </form>

</body>
</html>