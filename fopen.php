<?php
    //fopen("file_name", "r"); Sets a pointer to the file, the "r" means for read only.

    $file_contents = fopen("dictionary.txt", "r");
    print $file_contents;

    //fclose - closes the the open file
    fclose($file_contents);

?>