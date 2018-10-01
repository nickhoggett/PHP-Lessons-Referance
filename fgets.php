<?php

    // fopen function, open file and remember location, "r" read only. fucntion axts as a pointer (does not get content)

    $file_handle = fopen("dictionary.txt", "r");

    /* $file_handle is put into a while loop,
        feof means file, end of file: this is the end of the loop
    */

    while (!feof($file_handle)) {

        // function fgets($variable); this reads a single line of the document.
        $line_of_text = fgets($file_handle);
        print $line_of_text. "<br>";

    }

    //closes the point - no longer neeeded.
    
    fclose($file_handle);

?>