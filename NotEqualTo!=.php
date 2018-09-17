<?php 

    $correct_username = 'logmein';
    $what_visit_typed = 'logmein';
    
    //not equal operator is !=
    
    if($what_visit_typed != $correct_username) {
        
        print("You're Not A valid user of this site!");
    }

    else {
        print("Welcome back friend!");
    }
    
    ?>