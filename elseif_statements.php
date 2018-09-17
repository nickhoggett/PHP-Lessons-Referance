<?php 

    // set variables.

    $kitten_image = 0;
    $church_image = 0;


    // if ... else if ... else statement follows in this order
    
    if ($kitten_image == 1) {

        // print image with html tag

        print("<img src=images/kitten.jpg>");
    }

    else if ($church_image == 1) {
        print("<img src=images/church.jpg>");
    }

    else {
        print ("No value of one detected");
    }
?>