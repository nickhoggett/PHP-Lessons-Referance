<?php

    //Assosiate Array - the key is now linked to a word rather than a number. 
    //Scalar Array - Number keys. 

    $full_name = array();

    $full_name["David"] = "Gilmour";
    $full_name["Nick"] = "Mason";
    $full_name["Roger"] = "Waters";
    $full_name["Richard"] = "Wright";

    print $full_name["David"]. "<br>";

    // Loop code for an assosiate array below. 
    // second and third variable is given a value in a foreach loop when you have assigned it to an array, 
    // it doesn't matter what the variable name is it will always put out the same output with this symbol =>.

    foreach ($full_name as $first_name => $surname) {

        print ("Key = ". $first_name. " Value = ". $surname. "<br>");

    }

        

?>