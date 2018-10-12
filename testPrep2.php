<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test Prepare 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
	<?php

		// empty variables set for each input
		$email = "";
		$passW = "";
		$uName = "";

		if (isset($_POST['Submit1'])) {

			require '../../configure.php';

			//each variable assigned to the html input
			$uName = $_POST['user'];
			$passW = $_POST['pass'];
			$email = $_POST['email'];

			//database name put to variable, then opened with the defined details on configure.php
			$database = "membertest";

			$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

			if ($db_found) {

				//SQL statements ->(object) prepare(Insert into memebers (column keys) VALUE empty (?) value un-assigned)
				$SQL = $db_found ->prepare("INSERT INTO members (username, password, email) VALUES (?, ?, ?)");

				//bind parameters('sss' (s = string), variable of inputs);
				$SQL ->bind_param('sss', $uName, $passW, $email);
				$SQL ->execute();

				$SQL ->close();
				$db_found ->close();

				print "new row inserted";

			}

			else {

				print "Database Not Found";

			}

		}

	?>
</head>
<body>
	<form name = "form1" method = "POST" action = "testPrep2.php">
		User <input type = 'text' Name = 'user' value = 'test2'> 
			<br>
		Pass <input type = 'text' Name = 'pass' value = 'test2'>
			<br>
		email address <input type = 'text' Name = 'email' value ="<?php print $email ; ?>">

		<input type = "Submit" Name = "Submit1" value = "Login">
	</form>
</body>
</html>