<?php

    $total_spent = 100;
    $discount = 100;

    // >= greater than or equal operator
    
    if ($total_spent >= $discount) {
        print("10% discount is applicable to this order!");
    }

    else if ($total_spent < $discount) {
        print("Discount has not been applied");
    }
?>