<?php

    $user_name = trim("Bill Gates");

    display_error_message($user_text);

    function display_error_message($user_text) {

        if ($user_text == "") {

            print "Blank text box detected";
        }

        else {
            
            print "Text OK";

        }
        
    }
?>