<?php
    fscanf(STDIN, "%s", $A);
    fscanf(STDIN, "%s", $B);
    $j = 0;
    for($i = 0; $i < strlen($A); $i++) {
        if($A[$i] == $B[$i]) {
            $j++;
            break;
        }
    }
    echo $j;
