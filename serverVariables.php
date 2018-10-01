<?php

    // server variable is $_SERVER place inside another variable. 
    //['refer to key_name'].

    $referrer = $_SERVER['HTTP_REFERER'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    print "Referrer = ". $referrer. "<br>";
    print "Browser = ". $browser. "<br>";
    print "IP Address = ". $ipAddress. "<br>";
    
    print "<br>";

    //All $_server options printed out in a loop with thr $key_name & $key_value
    // $key_name & $key_value can be any value 
    
    foreach($_SERVER as $key_name => $key_value) {

        print $key_name. "=". $key_value. "<br>";

    }
?>