<?php 

    $numbers_list = array();

    $numbers_list[] = "2";
    $numbers_list[] = "8";
    $numbers_list[] = "10";
    $numbers_list[] = "6";

    //Sort () function arranges a scalar array = numbers 

    sort($numbers_list);

    print $numbers_list[0]. "<br>";
    print $numbers_list[1]. "<br>";
    print $numbers_list[2]. "<br>";
    print $numbers_list[3]. "<br>";

?>

<?php

    $full_name = array();

    $full_name['Richard'] = "Wright";
    $full_name['David'] = "Gilmour";
    $full_name['Nick'] = "Mason";
    $full_name['Roger'] = "Waters";

    //Sort array to an alphabetical order, asort() is used for an associative array. 
    //The a in asort() tells php that this is associative and will organise by the value not the key. 

    asort($full_name);

    foreach ($full_name as $firstname => $surname) {

        print ("First Name = ". $firstname. " Surname = ". $surname. "<br>");
    }
    
    /* Reverse sort functions 
    
    ---- rsort() – Sorts a Scalar array in reverse order 
    ---- arsort() - Sorts the Values in an Associative array in reverse order 
    ---- krsort( ) - Sorts the Keys in an Associative array in reverse order */
    
?>