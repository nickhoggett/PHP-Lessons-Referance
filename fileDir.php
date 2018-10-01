<?php

    // realpath(file_name) apply variable to inbult function. Returns absolute filepath.
    $absolute_path = realpath("fileDir.php");

    print "Absolute path is: ". $absolute_path;

    echo("<br>");

    // dirname(file/path/file) apply to variable to inbuilt function. Returns the filepath, not the file name.
    $dir = dirname("C:/wamp64/www/lessons/fileDir.php");

    print "directory is: ". $dir. "<br>";

    //bas(file.path.file) apply to variable to inbuilt function. Returns the file name only, not the path.
    $bas = basename("lessons/fileDir.php");

    print "File Name is: ". $bas. "<br>";

?>