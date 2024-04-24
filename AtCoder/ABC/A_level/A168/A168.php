<?php
    $A = str_split(trim(fgets(STDIN)));
    
    if(count($A) == 2) {
        $A = $A[1];
    } else if(count($A) == 3) {
        $A = $A[2];
    }
  
    if($A[0] == 2 || $A[0] == 4 || $A[0] == 5 || $A[0] == 7 || $A[0] == 9) {
        echo "hon";
    } else if($A[0] == 0 || $A[0] == 1 || $A[0] == 6 || $A[0] == 8) {
        echo "pon";
    } else if($A[0] == 3) {
        echo "bon";
    }    
