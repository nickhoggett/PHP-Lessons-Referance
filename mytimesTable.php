<html>
	<head>
		<title>A Times Table Programme</title>
		<?php

			$times = 2;
			
			if (isset($_POST['Submit1'])) {

				$start = $_POST['txtStart'];
				$end = $_POST['txtEnd'];
				$times = $_POST['txtTimes'];

				for ($start; $start <= $end; $start++) {

					$answer = $start * $times;
					print $start . "multiplied by " . $times . "=" . $answer . "<br>";
					
				}

			}

		?>
	</head>
<body>
	<form name = "formOne" Method = "POST" Action = "mytimesTable.php">

		Start Number: <input type = "text" NAME = "txtStart" size = "5" value = "1">
		End Number: <input type = "text" name = "txtEnd" size = "5" value = "10">
		Multiply By: <input type = "text" name = "txtTimes" size = "5" value = <?php print $times; ?>
			<p>
		<input type = "Submit" name = "Submit1" value = "Do Times Table">
	</form>
</body>

<html>