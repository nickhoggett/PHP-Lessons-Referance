<?php
    
    //Applying a discount of 10%.

    $totalSpent = 120;

    //Function is called in the $orderTotal variable to calculate the $totalSpent variable.

    $orderTotal = calculate_total($totalSpent);
    print $orderTotal; 

    // function is called back in the functions argument.

    function calculate_total($totalSpent) {
        
        $discount = 0.1;

        if ($totalSpent > 100) {

            //code that works out the discount then variable is set up for total charges.
            
            $discountTotal = $totalSpent - ($totalSpent * $discount);
            $totalCharged = $discountTotal;

        }

        else {

            $totalCharged = $totalSpent;

        }

        // returns the if or else value of the $totalCharged variable. 

        return $totalCharged;

    }

?>