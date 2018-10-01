<?php

    /* this function will not work as referred to in scope 

    $variable_value = 10;
    example();

    function example() {

        print $variable_value;

    }

    this is because the function cannot see the written variable. */

    // to fix this you need to refer to the function in the round brackets ().

    $variable_value = 10;

    example($variable_value);

    function example($variable_value) {

        print $variable_value;

    }

    print "<br>". "<br>";

    //above example is not changing the value of the variable. 

    //here's an example of how a value can be changed within a function.


    $variable_value2 = 11;

    print "Before the function call = ". $variable_value2. "<br>";

    //function is setup with an argument.

    example2($variable_value2);

    //this fuunction will still = 11, same as the original variable, this is because the function is written afterwards.
    // function will be place above to where the function was setup above. 

    print "After the function call = ".$variable_value2;

    function example2($variable_value2) {

        $variable_value2 = $variable_value2 + 10;
        print "Inside of the function = ". $variable_value2. "<br>";

    }

    print "<br>". "<br>";

    $variable_value3 = 12;

    print "Before the function call = ". $variable_value3. "<br>";

    example3($variable_value3);

    print "After the function call = ". $variable_value3;

    //adding the & to the function agruement will allow the function to remember the value of the variable it's been handed.
    //this $variable_value3 will now print out 32 as requested not just copy it.
    
    function example3(&$variable_value3) {

        $variable_value3 = $variable_value3 + 20;
        print "Inside of the function = ". $variable_value3. "<br>";

    }

?>