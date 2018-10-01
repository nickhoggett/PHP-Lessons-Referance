<?php

    // $text_line is a string with number broken up by , .

    $text_line = "Poll number 1, 1500, 250, 150, 100, 1000";

    /* explode() breaks to string by , and turns it into an array.
    explode(What to break the string up by , variable to break up) */

    $text_line = explode("," , $text_line);

    // This string can now be printed out as if it were an array.

    print $text_line[0]. "<br>";
    print $text_line[1]. "<br>";
    print $text_line[2]. "<br>";
    print $text_line[3]. "<br>";
    print $text_line[4]. "<br>";
    print $text_line[5]. "<br>";
    //key 6 doesn't exist.

    print $text_line[6]. "<br>";

    // print_r() - prints the array details, Keys and Values

    print_r($text_line). "<br>";
    
    /* the converted string to array printed out in a loop,
    loop explained (start variable, count() variable used to end loop, $start variable incremented) */

    for($start = 0; $start < count($text_line); $start++) {

        // code executed in the loop print variable with a break
        
        print $text_line[$start]. "<br>";

    }

?>
