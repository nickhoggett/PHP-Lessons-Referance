<?php

    $total_spent = 100;
    $special_key = 'SK123456';
 
    // OR operator is two lines ||
    
    if ($total_spent >= 100 || $special_key == 'SK12345') {
        print("Discount apllied");
    }

    else {
        print("No discount on order");
    }
?>