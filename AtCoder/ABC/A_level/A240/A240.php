<?php
    fscanf(STDIN, "%d %d", $A, $B);
    if($A+1 === $B || $B-1 === $A || ($A === 1 && $B === 10)) {
        echo "Yes";
    } else {
        echo "No";
    }
