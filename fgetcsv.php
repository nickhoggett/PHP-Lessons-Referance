<?php
    // fopen(file_name) function put into a variable. Read Only

    $file_handle = fopen("widgets.csv", "r");

    //variable put into a while loop.
    while (!feof($file_handle)) {

        //fgetdcsv(variable call, size of line - 1KB)
        //fgetcvs() turns the line into an array 
        $line_of_text = fgetcsv($file_handle, 1024);

        //print lines as a usual array
        print $line_of_text[0]. $line_of_text[1]. $line_of_text[2]."<br>";

    }

    fclose($file_handle);

?>