<?php

    //set variables

    $counter = 0;
    $start = 1;

    //for loop = for (start of loop; end of loop; argument $start variable increments by 1
    )
    for($start; $start < 11; $start++) {
    
        /* code that is executed by the for loop
        counter increments by 1 until it reaches 10 by end of loop $start < 11; */
        
        $counter = $counter++; 
        print $counter . "<BR>";

    }

?>