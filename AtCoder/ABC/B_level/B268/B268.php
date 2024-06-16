<?php
    $searchStr = trim(fgets(STDIN));
    $str = trim(fgets(STDIN));
    
    if(substr($str, 0, strlen($searchStr)) === $searchStr) {
       echo "Yes"; 
    } else {
        echo "No";
    }
