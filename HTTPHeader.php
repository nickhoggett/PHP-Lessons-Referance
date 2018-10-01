<?php 

    //This code will redirect the user to another location. 
    //This line will redirect from this PHP code to the below site.
    //This code must appear before any HTML code on the site or it will not work.

    header("Location: http://www.homeandlearn.co.uk/");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTTP Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- Any HTTP Hear line such as above will return an error "Cannot Modify header information"; -->
</body>
</html>