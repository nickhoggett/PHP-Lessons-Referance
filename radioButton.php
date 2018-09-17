<html>
<head>
<title>Radio Buttons</title>

<?php 
	// checkes if the submit button has been pushed
	if (isset($_POST['Submit1'])) {

		//var stating that selected gender will $_POST to gender. Then print!
		$selected_radio = $_POST['gender'];
		print $selected_radio;

	}
?>
</head>

<?PHP

// Male and female variables = start unchecked.
$male_status = 'unchecked';
$female_status = 'unchecked';

// checked if form has already been submitted by submit button (if pushed).
if (isset($_POST['Submit1'])) {

	$selected_radio = $_POST['gender'];
	
		// if male radiobutton is checked variable $male_status is changed to 'checked'
		if ($selected_radio == 'male') {
			$male_status = 'checked';

		}
		// if femaile radiobutton is checked vsrisble $female_status is changed to 'chacked'.
		else if ($selected_radio == 'female') {
			$female_status = 'checked';
		}
}

?>

<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="radioButton.php">

<INPUT TYPE = 'Radio' Name ='gender'  value= 'male' <?PHP print $male_status; ?>>Male

<INPUT TYPE = 'Radio' Name ='gender'  value= 'female' <?PHP print $female_status; ?>>Female
<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Select a Radio Button">
</FORM>

</body>
</html>


