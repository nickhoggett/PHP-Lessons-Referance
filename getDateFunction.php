<?php

    //getdate will return an associate array. 
    // syntax getdate(time_stamp);

    /*Time Stamp options
       seconds
       minutes  
       hours 
       mday (day of the month as a number) 
       wday (day of the week as a number) 
       mon (month a number) 
       year
       yday (year day as a number) 
       weekday (day in text format) 
       month (month in text format) 
       0 (Seconds since the Unix Epoch)*/

       $today = getdate();

       /* print $today 'day of the month as a number'
            print $today 'day of the week as a number'
            print $today 'print day of the year as a number' */
            
       print $today['mday'];
       print $today['wday'];
       print $today['yday']. "<br>". "<br>";

       $post_date = date("z");

       print $post_date. "<br>". "<br>";

        //Compare the date agienst today's date
        //variables set $post_date2 days in the year, $today2 set the getdate(function).

        $post_date2 = 274;
        $today2 = getDate();

        //set variable $day_difference day minus the $post_date2
        
        $day_difference = $today2['yday'] - $post_date2;

        print "Days since last post = ". $day_difference;
 
?>