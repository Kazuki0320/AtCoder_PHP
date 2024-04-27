<?php
    $A = trim(fgets(STDIN));
    $week = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];
    $result = array_search($A, $week);
    if($result == 6) {
        echo 7;
    } else {
        echo (7 - ($result + 1));    
    }
    
