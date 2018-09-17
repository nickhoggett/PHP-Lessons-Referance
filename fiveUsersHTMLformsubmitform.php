<!DOCTYPE html>
<html>
<head>

    <?php

        if (isset($_POST["submit1"])) {
            
        $username = $_POST['username'];
       

        if ($username == "letmein" XOR $username == "nick" XOR $username == "Brian" XOR $username == "Smith" XOR $username == "Anna") {
            print("Welcome Back Friend!");
        }

        else {
            print("Your not allowed here!");
        }
    }
    ?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="form1" method="post" action="htmlformWithLogic.php">

        <input type="text" value="username" name="username">
        <input type="submit" name="submit1" value="login">  

    </form>
</body>
</html>