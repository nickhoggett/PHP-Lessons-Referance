<html>
<head>
<title>Checkboxes</title>
<?php

    //variables for checkboxes = checked or unchecked to start;

    $ch1 = 'unchecked';
    $ch2 = 'unchecked';
    $ch3 = 'unchecked';
    $ch4 = 'unchecked';
    $ch5 = 'unchecked';
    
    //isset() checkes if the submit button has been selected.

    if (isset($_POST['Submit1'])) {
        
        //isset() checked if the checkbox has been selected, if not then the checkbox has no value and ignored;

        if (isset($_POST['ch1'])) {

            //variable set to variable $_POST. assigned to ['ch1'].
            $ch1 = $_POST['ch1'];

            //if the value of the variables $ch1 is 'net', then execute code {}

            if ($ch1 == 'net') {
                $ch1 = 'checked';
            }
        } 

        if (isset($_POST['ch2'])) {
            
            $ch2 = $_POST['ch2'];

            if ($ch2 == 'word') {
                $ch2 = 'checked';
            }
        }

        if (isset($_POST['ch3'])) {

            $ch3 = $_POST['ch3'];

            if ($ch3 == 'excel') {
                $ch3 = 'checked';
            }
        }

        if (isset($_POST['ch4'])) {

            $ch4 = $_POST['ch4'];

            if ($ch4 == 'web') {
                $ch4 = 'checked';
            }
        } 

        if (isset($_POST['ch5'])) {

            $ch5 = $_POST['ch5'];

            if ($ch5 == 'php') {
                $ch5 = 'checked';
            }
        }
    }
?>
</head>
<body>

    <form name = "form1" method = "POST" action = "checkboxes2.php">
        <input type = "checkbox" name = "ch1" value = "net" <?php print $ch1; ?>>Visual Basic
            <p>
        <input type = "checkbox" name = "ch2" value = "word" <?php print $ch2 ;?>>Microsoft Word
            <p> 
        <input type = "checkbox" name = "ch3" value = "excel" <?php print $ch3 ;?>>Microsoft Excel
            <p>
        <input type = "checkbox" name = "ch4" value = "web" <?php print $ch4 ;?>>Web Site Building
            <p>
        <input type = "checkbox" name = "ch5" value = "php" <?php print $ch5 ;?>>Learn PHP
            <p>

        <input type = "submit" name = "Submit1" value = "Select your books">
    </form>
</body>
</html>
