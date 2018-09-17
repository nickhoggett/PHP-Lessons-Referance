<html>
<head>
<title>A BASIC HTML FORM</title>
<?PHP

    if (isset($_POST["submit1"])) {

        $username = $_POST['username'];

        if ($username == 'Nick' XOR 'Bob') {
            print("Hello");
        }

        else {
            print("GO AWAY");
        }
    }

    else {
        $username = "";
    }
?>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "formexercise2.php">

<INPUT TYPE = "TEXT" NAME= "username" VALUE ="username">
<INPUT TYPE = "Submit" Name = "submit1" VALUE = "Login">

</FORM>
</body>
</html>