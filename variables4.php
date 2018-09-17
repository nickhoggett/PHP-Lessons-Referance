<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variable print</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $first_Number = 10;
    $second_Number = 20;
    $third_Number = 100;
    $sum_total = ($third_Number - $second_Number) / $first_Number;

    $direct_text = "The variables added together ";
    print($direct_text. $sum_total); 
    ?>
</body>
</html>