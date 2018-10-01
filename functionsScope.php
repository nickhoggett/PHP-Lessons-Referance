<?php
    // this function will return an error $error_text is a Global variable.

    /*
    $error_text = "Error Detected";

    display_error_message();

    function display_error_message() {

        print $error_text;

    }
    
    // the variable this time is written inside the function this time and will still error
    as the execution of the variable is written before the variable is set.

    display_error_message();

    print $error_text

    function display_error_message() {

        $error_text = "Error Message";

    } 

    */

    //correct code

    // variable and execution is written inside the function with local scope. 

    display_error_message();

    function display_error_message() {

        $error_text = "Error message";
        print $error_text;

    }
    
?>
