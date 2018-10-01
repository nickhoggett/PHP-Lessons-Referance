<html>
 <head>
  <title>Test Attack</title>
<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_name = $_POST['first_name'];

    /*Without any of the below inbuilt PHP functions below anyone post code into the text boxes below will be able to insert
    working code to your page. */

    //htmlspecialchars allows the user to post the script typed as plain text. special charecter with no function.

    //$first_name = htmlspecialchars($first_name);
    
    //htmlentities() same as the above function but also cuts out code in other languages. 
    //$first_name = htmlentities($first_name);

    //strip_tags() will do what is says, remove the html tags from any code inserted;
    //$first_name = strip_tags($first_name);

    //Also with the strip tags function you can add html to ignore for example.
    $first_name = strip_tags($first_name, "<b> <script>");

    // for example: strip_tags($variable, the_code_to_ignore); 

	echo $first_name;
}

?>


 </head>
 <body>


</body>

<Form Method = "Post" action ="testSecurity.php">
<input type = "text" name = "first_name" value ="test name">
<input type="submit" name="Submit" value="Submit">
</Form>


<P>

</html>
