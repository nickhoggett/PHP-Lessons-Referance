<?php

    //$_SERVER["HTTP_USER AGENT"] returns the brower that the user is currently using

    $agent = $_SERVER["HTTP_USER_AGENT"];
    print $agent. "<br>";

    // strpos() function - This function searchs for a position within a string
    // detail for strpos( string_to_search, string_to_nd, start ).
    
    $full_name = "bill gates";
    $letter_position = strpos($full_name, "b");
    print $letter_position;

?>