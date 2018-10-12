<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prepared Statements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
<?php

$email = "";

if (isset($_POST['Submit1'])) {
	require '../../configure.php';
	$email = $_POST['email'];

	$database = "membertest";

	// the keyword new is needed inorder to setup a new object. 
	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

	if ($db_found) {

		// first line of the prepared SQL statement. Prepared statement prevent SQL injection from user forms,
		// -> this symbol is needed when refering to an object. SQL code is now an object.
		// WHERE is selecting all the values that mets a condition (WHERE email = ?)
		// email - is the field we want to look up, ? - is the placeholder to be replaced by the actual value
		$SQL = $db_found->prepare('SELECT * FROM members WHERE email = ?');

		//this line replaces the paramator - ?, bind paramators prepare data for php.
		// ->bind_param('s' variable to bind to sql) 's' is used to bind the paramators, 
		$SQL->bind_param('s', $email);
		// The prepare statement could be used to cover more than one the statement would then look like this 
		// $SQL = $db_found->prepare('SELECT * FROM members WHERE email = ? AND username = ?');
		// $SQL = ->bind_param('ss', $email); the bind_param statement would then look like this. 

		// 's' - stands for string eg $SQL ->bind_param('s', $some_string_value);
		// 'i' - stands for integer eg $SQL ->bind_param('i', $some_integer_value);
		// 'd' - stands for double eg $SQL ->bind_param('d', $some_double_value);
		// 'b' - stands for BLOB eg $SQL ->blind_param('b', $some_BLOB_value);

		$SQL->execute();

		$result = $SQL->get_result();
		// execute(); & get_result(); inbuilt functions.

		if ($result->num_rows > 0) {
		// inbuilt function num_rows - if number of row are greater than 0

			while ( $db_field = $result->fetch_assoc() ) {
			// fetch_assoc() inbuilt function, get the associate array

				print $db_field['ID'] . "<BR>";
				print $db_field['username'] . "<BR>";
				print $db_field['password'] . "<BR>";
				print $db_field['email'] . "<BR>";
			}

		}
		else {

			print "No records found";
		
		}

		$SQL->close();
		$db_found->close();

	}
	else {

		print "Database NOT Found ";
		
	}

}


?>
</head>
<body>
    <form name = "form1" method = "POST" action = "PreparedStatements.php">
        email address <input type = "text" name = "email" value = "<?php print $email; ?>">
        <input type = "Submit" name = "Submit1" Value = "Login">
    </form>
</body>
</html>