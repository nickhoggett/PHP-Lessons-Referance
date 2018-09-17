<?php

    //$_POST is an inbuilt php variable that post to the name inside [''];
    
    $username = $_POST['username'];

    if ($username == 'letmein') {
        print("Welcome back in, friend!");
    }

    else {
        print("Go away your not meant to be here!");
    }

?>