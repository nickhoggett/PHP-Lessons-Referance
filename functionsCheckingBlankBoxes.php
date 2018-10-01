<?php

    //trim() user_text variable 
    $user_text = trim("");

    //setup function
    display_error_message($user_text);

    //call function with argument followed by the if and else statements.
    function display_error_message($user_text) {

        if ($user_text == "") {

            print "Blank text box detected";
        }

        else {
            
            print "Text OK";

        }
        
    }

?>