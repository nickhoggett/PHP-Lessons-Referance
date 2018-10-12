<?php

    print "Day of the month". "<br>". "<br>";

    // day of the month - d
    $today = date("d m y");

    // day of the month in text shortened - D (Capital)'
    $today2 = date("D M Y");

    // day of the month without the 0's - j
    $today3 = date("j m y");

    // day of the month but not shortened - l
    $today4 = date("l m y");

    // day of the month ordinal ending = s
    $today5 = date("s m y");

    // day of the week numerical value - w ( 0 is sunday, 6 is saturday)
    $today6 = date("w");

    // week number of the year - W (Capital) 
    $today7 = date("W");

    // numeric day of the year - z
    $today8 = date("z");

    print $today. "<br>";
    print $today2. "<br>";
    print $today3. "<br>";
    print $today4. "<br>";
    print $today5. "<br>";
    print $today6. "<br>";
    print $today7. "<br>";
    print $today8. "<br>". "<br>"; 

    print "Year characters". "<br>". "<br>";
    
    // Year charecters, Is it a Leap Year? returns a boolean value - L (Capital);
    $year = date("L");
    
    // Year charecters, 4 digit year value - Y
    $year2 = date("Y");

    // Years charecters. 2 digit year value - y (Capital);
    $year3 = date("y");

    print $year. "<br>";
    print $year2. "<br>";
    print $year3. "<br>". "<br>";

    print "Others". "<br>". "<br>";

    //Morning or afternoon (AM PM);
    $Other = date("ga");

    //Morning or afternoon (Uppercase)
    $Other2 = date("gA");

    //Time 12 hour format - no leading zeros
    $other3 = date("g");

    //time 24 hour format - no leading zeros (Capital)
    $Other4 = date("G");

    //time 12 hour format - with zeros
    $Other5 = date("h");

    //time 24 hour format - with zeros (Capital)
    $Other6 = date("H");

    //time in minute to the hour 
    $Other7 = Date("i");

    //time in seconds to the minute
    $Other8 = Date("s");

    print $Other. "<br>";
    print $Other2. "<br>";
    print $other3. "<br>";
    print $Other4. "<br>";
    print $Other5. "<br>";
    print $Other6. "<br>";
    print $Other7. "<br>";
    print $Other8. "<br>". "<br>";

    print "Examples of use". "<br>". "<br>";

    $example = date('l jS F Y');
    
    print $example. "<br>". "<br>";
    
    $today9 = date('W');
    $year4 = date('Y');

    print "It's week ". $today9. " of ". $year4. "<br>". "<br>";

    $time = date('h:i:s a');
    print $time. "<br>". "<br>";

    $time2 = date('G:i:T');
    print $time2;
?>