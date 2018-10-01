<?php

    $file_handle = fopen("dictionary.txt", "rb");

    while (!feof($file_handle)) {

        $line_of_text = fgets($file_handle);
        $parts = explode('=', $line_of_text);

        print $parts[1]. "<br>";

    }

    fclose($file_handle);

?>