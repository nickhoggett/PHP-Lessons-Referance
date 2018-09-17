<html>
<head>
<title>A BASIC HTML FORM</title>
<?PHP

	if (isset($_POST['Submit1'])) {
		
        $firstName = $_POST['firstName'];
        $surname = $_POST['surname'];
        $username = $firstName. $surname;

			if ($username == "NickHoggett") {
				print("Welcome back friend");
			}

			else {
				print("Go Away Your Not Welcome");
			}
	}
	else {
		$username = "";
	}
?>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "Fullnameform.php">

<INPUT TYPE = "TEXT" NAME= "firstName" VALUE ="firstName ">
<INPUT TYPE = "TEXT" NAME= "surname" VALUE ="surname">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

</FORM>
</body>
</html>
