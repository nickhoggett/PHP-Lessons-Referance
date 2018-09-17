<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Exercise1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php
        
        // checkes if the submit button has been clicked

        if (isset($_POST['Submit1'])) {
            
            //set variable with $_POST to ['ident']

            $Name = $_POST['Name'];
            $Surname = $_POST['Surname']; 
    
                //if and else statements checking what the user has put in the textboxes.

                if ($Name == 'Nick' && $Surname == 'Hoggett') {
                    print("Nick Hoggett");
                }
    
                else {
                    print("Go Away Your Not Welcome");
                }

        }

    ?>
</head>
<body>
    <form name="form2" method="post" action="formexercise.php">

        <input type="text" name="Name" value="Name">
        <input type="text" name="Surname" value="Surname">
        <input type="submit" name="Submit1" value="Login">
    </form>
</body>
</html>