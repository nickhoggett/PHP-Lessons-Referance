<?php

    // readfiles(documentname), this function returns the text from a document.

    //$file_content = readfile("dictionary.txt");

    //print $file_content;

    /* This can be written directly without function.

            $files_to_read = "dictionary.txt";
            print readfile($files_to_read);


    The same code with file path
    
            $files_to_read = "files\dictionary.txt";
            print readfile($files_to_read);
            
    */

    $files_to_read = "dictionary.txt";
    print file_get_contents($files_to_read);

?>