<?php

    //set variables

    $Teacherinterrupts = true;
    $counter = 1;
    
    //while statement loop

    while ($counter < 11) {

        print(" Counter = " . $counter . "<br>");

        //if $Teacherinterrupts is true stop loop
        
        if ($Teacherinterrupts == true) {

            break;
        }

        $counter++;

    }
    
?>