<?php

    // method one of writing and array in PHP,
    // write in the values in the curly brackets.

    $seasons = array("Autumn", "Winter", "Spring", "Summer");
    print $seasons[0];

    // change the key of the array =>.

    $seasons2 = array( 1 => 10, 2 => 20, 3 => 30, 4 => 40);
    print ("<br>". $seasons2[2]);

    // Assigning a new value to an array key.

    $key_data = $seasons2[4];
    print ("<br>". $key_data. "<br>");

    // printing the key from a loop 

    for ($key_number = 0; $key_number < 4; $key_number++) {

        print "<br>". $seasons[$key_number];

    }

?>