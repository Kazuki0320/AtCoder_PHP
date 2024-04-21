<?php
    fscanf(STDIN, "%d", $A);
    $count = $A / 1000;
    $over = $A % 1000;

    if($over == 0) {
        echo 0;
    } else if(0 < $over) {
        $result  = 1000 - $over;
        echo $result;
    }
