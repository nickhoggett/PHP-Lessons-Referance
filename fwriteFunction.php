<?php

    //variables used for to open function and the contents to write to file.
    //"w" write to
    //"a" will write to file and keep the content already there.
    //"r" read only function - this will stop the rest of the code from working. No longer able to write to file.
    
    $file_handle = fopen("testFile.txt", "r");
    $file_contents = "Some test text again";

    //fwrite function will only work on file once fopen has been created and run.
    //meaning is functionwrite(variable of file to write to, variable of contents to add)'

    fwrite($file_handle, $file_contents);

    //function close(vairbale of file);

    fclose($files_handle);

    print "file created and written to";

?>