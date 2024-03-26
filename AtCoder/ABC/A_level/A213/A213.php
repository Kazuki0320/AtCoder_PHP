<?php
    fscanf(STDIN, "%d%d", $A, $B);
    for($C = 0; $C <= 255; $C++) {
        if(($A ^ $C) == $B) {
            echo $C;
            exit;
        }
    }
