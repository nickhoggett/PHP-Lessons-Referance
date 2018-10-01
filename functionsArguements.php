<?php

    $error_text = "Error Message";
    display_error_message($error_text);

    // to call a variable that is outside of the function you need to call an argument
    // place a variable of value in the () will add the argument to the function.

    function display_error_message($error_text) {

        print $error_text;
        
    }

    // a function can call more than one variable or value  if the arguments are seperated by a , eg

    $error_text2 = "Error Meassage";
    $error_flag = 1;

    error_check($error_text2, $error_flag);

    function error_check($error_text2, $error_flag) {

        print $error_text2. $error_flag;
    }
?>