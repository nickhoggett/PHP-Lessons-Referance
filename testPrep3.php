<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPDATE - Prepare test 3</title>
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

        $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

        if ($db_found) {

            // SQL line to update a line below UPDATE table SET username=?, password=? WHERE email=?
            // this sql line will update all the values
            // So, "UPDATE the username and password WHERE the email address matches the one provided.
            $SQL = $db_found->prepare("UPDATE members SET username=?, password=? WHERE email=?");

            $SQL->bind_param('sss', $uName, $passW, $email);
            $SQL->execute();

            $SQL->close();
            $db_found->close();

            print "Row Updated";

        }

        else {

            print "Database Not Found";

        }

    }

    ?>
</head>
<body>
    <form name ="form1" method ="POST" action="testPrep3.php">
        User <input type ='text' name='user' value="textfive">
            <br>
        Pass <input type ='text' name='pass' value="textfive">
            <br>
        email address <INPUT TYPE = 'TEXT' Name ='email'  value="<?PHP print $email ; ?>">

        <input type = "Submit" name = "Submit1" value = "Login">
    </form>
</body>
</html>