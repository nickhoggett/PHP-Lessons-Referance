<?php

    // apply date() to a variable.

    // there are lots of different arguement that may go in between the brackets

    $today = date('d-m-y'). "<br>";
    $today2 = date("D-M-Y"). "<br>";

    //the seperator can be anything you like, this will however be printed out.

    $today3 = date("d:m:y"). "<br>";
    $today4 = date("D m Y"). "<br>";
    $today5 = date("d+m+y"). "<br>";


    print $today;
    print $today2;
    print $today3;
    print $today4;
    print $today5;

?>