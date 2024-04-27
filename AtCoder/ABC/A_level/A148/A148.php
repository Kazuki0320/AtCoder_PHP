<?php
    fscanf(STDIN, "%d", $A);
    fscanf(STDIN, "%d", $B);
    if(($A == 1 && $B == 2) || ($A == 2 && $B == 1)) {
        echo 3;
    } else if(($A == 2 && $B == 3) || ($A == 3 && $A == 2)) {
        echo 1;
    } else if(($A == 1 && $B == 3) || ($A == 3 && $B == 1)) {
        echo 2;
    }
