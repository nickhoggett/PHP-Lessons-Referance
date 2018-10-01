<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check For Blank Text Boxes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php

        $first = "";
        $second = "";

        function display_error_message($user_text) {

            if ($user_text == "") {

                print "One or more blank text boxes detected";
            
            }

            else {

                print "Text Boxes OK";

            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $first = trim($_POST['first']);
            $second = trim($_POST['second']);

            display_error_message($first);
            display_error_message($second);

        }

    ?>

    <form method = "POST" action = "functionsCheckingBlankBoxesWithHTML.php">
        First Name: <input type = "text" name = "first" value = "<?= $first ?>">
        Surname: <input type = text name = "second" value = "<?= $second ?>">

        <input type = "submit" name = "Submit" value = "Submit">
    </form>
</body>
</html>