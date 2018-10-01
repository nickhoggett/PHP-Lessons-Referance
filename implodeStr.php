<?php

    $seasons = array("Autumn", "Winter", "Spring", "Summer");
    
    // implode() function used for putting together an array into a string.
    // explained - implode( joined together by, select variable);
    
    $new_textline = implode(" ", $seasons);

    print $new_textline;

?>