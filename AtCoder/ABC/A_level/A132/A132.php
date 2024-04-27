<?php
    $A = str_split(trim(fgets(STDIN)));
    $result = array_unique($A);
    if(count($result) == 2) {
        echo "Yes";
    } else {
        echo "No";
    }
