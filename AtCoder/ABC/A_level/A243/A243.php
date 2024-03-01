<?php
    fscanf(STDIN, "%d %d %d %d", $V, $A, $B, $C);
    while($V >= 0) {
        $V -= $A;
        if($V < 0) {
            echo "F";
            exit;
        }
        
        $V -= $B;
        if($V < 0) {
            echo "M";
            exit;
        }
        
        $V -= $C;
        if($V < 0) {
            echo "T";
            exit;
        }
    }

