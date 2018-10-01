<?php 
    print "Script One - Setup and Array and print out Values". "<br>"; 

    $seasons = array("Autumn", "Winter", "Spring", "Summer");

        print $seasons[0]. " ";
        print $seasons[1]. " ";
        print $seasons[2]. " ";
        print $seasons[3]. "<br>". "<br>";

?>

<?php

    print "Script Two - A simple Associative Array in PHP, with a key change written in". "<br>";

    $seasons2 = array(1 => "Autumn", 2=> "Winter", 3=> "Spring", 4=> "Summer");

    print $seasons2[1]. " ";
    print $seasons2[2]. " ";
    print $seasons2[3]. " ";
    print $seasons2[4]. "<br>". "<br>";

?>

<?php

    print "Script Three - A PHP array with mixed values and a set key". "<br>";

    $seasons3 = array(1 => 10, 2 => "Spring", 3 => 30, 4 => "Summer");

    print $seasons3[1]. " ";
    print $seasons3[2]. " ";
    print $seasons3[3]. " ";
    print $seasons3[4]. "<br>". "<br>";

?>

<?php

    print "Script Four - Creating an array and then assigning the values to the array". "<br>";

    $seasons4 = array();

    $seasons4[]= "Autumn";
    $seasons4[]= "Winter";
    $seasons4[]= "Spring";
    $seasons4[]= "Summer";

    print $seasons4[0]. " ";
    print $seasons4[1]. " ";
    print $seasons4[2]. " ";
    print $seasons4[3]. "<br>". "<br>";

?>

<?php 

    print "Script Five - Loop round values in a PHP array - see code comment for explaination of loop". "<br>";
    print "Times 2 with selected keys". "<br>";
    $start = 1;
    $times = 2; 
    $answer = array();

    // Loop start with $start variable, end condition < 11, incrementing ++;
    
    for ($start; $start < 11; $start++) {

        //Code executed on each loop before end ( < 11);

        $answer[$start] = $start * $times;

    }

    print $answer[1]. " ";
    print $answer[4]. " ";
    print $answer[8]. " ";
    print $answer[10]. "<br>". "<br>";
    
?>

<?php

    print "Script Six - Loop round a PHP Array - see comment for loop details". "<br>";

    $seasons6 = array("Autumn", "Winter", "Spring", "Summer");

    // $key_Number variable set in the loop at 0, $key_Number ends at 4; $key_Number increments
    // $key_Number is assigned to to variable $seasons6.

    for ($key_Number = 0; $key_Number < 4; $key_Number++) {

        print $seasons6[$key_Number];

    }

    print "<br>". "<br>";

?>

<?php

    print "Script Seven - Using Text as Keys in the PHP Arrays". "<br>";

    $full_name = array();

    $full_name["David"] = "Gilmour";
    $full_name["Nick"] = "Mason";
    $full_name["Roger"] = "Waters";
    $full_name["Richard"] = "Wright";

    print $full_name["Nick"]. "<br>";
    print $full_name["David"]. "<br>";
    print $full_name["Richard"]. "<br>";
    print $full_name["Roger"]. "<br>". "<br>";

?>

<?php 

    print "Script Eight - Loope Round a PHP associative array using Foreach". "<br>";

    $full_name2 = array();

    $full_name2["David"] = "Gilmour";
    $full_name2["Nick"] = "Mason";
    $full_name2["Roger"] = "Waters";
    $full_name2["Richard"] = "Wright";

    //foreach loop - ($full_name sets value of array, as the variable name for key then the variable name for value).

    foreach ($full_name2 as $first_name => $surname) {
        
        print "Key = ". $first_name. "Value = ". $surname. "<br>";

    }
    
    print "<br>";
?>

<?php

    print "Script Nine - Sorting PHP Array (Associative Array)". "<br>";

    $full_name3["Roger"] = "Waters";
    $full_name3["Richard"] = "Wright";
    $full_name3["Nick"] = "Mason";
    $full_name3["David"] = "Gilmour";

    foreach ($full_name3 as $first => $second) {

        print "Key = ". $first. "Value = ". $second. "<br>";

    } 

    print "<p>". "Same array sorted". "<p>";

    //ksort() - sorts accossiate array in the reverse order 

    ksort($full_name3);

    foreach ($full_name3 as $first => $second) {

        print "Key = ". $first. "Value = ". $second. "<br>";

    }

    print "<br>";
?>

<?php

    print "Script Ten - Sorting PHP Array (Scalae Array)". "<br>";

    $numbers = array();

    $numbers[] = "2";
    $numbers[] = "8";
    $numbers[] = "10";
    $numbers[] = "6";

    sort($numbers);

    print $numbers[0]. " ";
    print $numbers[1]. " ";
    print $numbers[2]. " ";
    print $numbers[3];

?>