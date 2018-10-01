<?php

    //Setup your array

    $numbers = array( 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

    // array_rand ($arrayname, amount of keys you want to pick) = random array built in php function 

    $random_key = array_rand($numbers, 1);
    print $random_key;

?>